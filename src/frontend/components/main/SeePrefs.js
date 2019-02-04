import React, { Component } from 'react';
import axios from 'axios';

export class SeePrefs extends Component {
  
  constructor(props){
    super(props);
    this.state = {
      preferences: []
    };
    this.handleChange = this.handleChange.bind(this);
    //this.handleSubmit = this.handleSubmit.bind(this);
    this.submit = this.submit.bind(this);
  }
  handleChange (event) {
    this.setState({
        Name: event.target.value
    })
  }

  submit (event) {
    axios.get('http://localhost:8888/mysql.php?name='+this.state.Name)
      .then(res => {
        const preferences = res.data;
        this.setState({ preferences });
      })
      event.preventDefault();
      //console.log(this.state.preferences.name);
  }

  render() {
    const prefs = this.state.preferences;
    console.log(prefs[1]);
    return (
      <div>
        <div className="home-form">
            <form id="form2"
                    action = 'http://localhost:8888/mysql.php'
                    onSubmit={this.submit} >
                <p className="spacer"><span className="preferences">I want to see..</span></p>
                <select value={this.state.value} onChange={this.handleChange} name="name">
                    <option value='' ></option>
                    <option value="Dale">Dale's</option>
                    <option value="Justin">Justin's</option>
                    <option value="Steven">Steven's</option>
                    <option value="Sam">Sam's</option>
                </select>
                <p className="spacer"><span className="preferences">preferred items...</span></p>
                
                <button type="submit" className="login-btn" id="mains-btns" onSubmit={this.submit}>Show me!</button>
                <div className="show-results"></div>
                <div className="show-results1"></div>
            </form>
            <p>{this.state.preferences.name}</p>
        </div>
      </div>
    )
  }
}

export default SeePrefs

// fetch("/url-to-post",{method: "POST",body: "name=manas&age=20"}).then((response) => 
// { 
//     // do something awesome that makes the world a better place
// });

/* <h2>{this.state.preferences.name} wants...</h2>
            <p>{this.state.preferences.pref1}</p>
            <p>{this.state.preferences.pref2}</p>
            <p>{this.state.preferences.pref3}</p> */