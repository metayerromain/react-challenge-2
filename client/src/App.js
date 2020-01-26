import React from 'react';
import AppContext from './context/AppContext';

class App extends React.Component {

  constructor(props) {
    super(props);
    this.state = {
      token: null,
      setToken: this.setToken,
      user: null,
      setUser: this.setUser,
      somethingIsLoading: false,
      theme: null,
      setTheme: this.setTheme
    }
  }

  componentDidMount(){
    const token = localStorage.getItem('@userAuthToken');
    this.setState({token});
    const user = localStorage.getItem('@userAuth');
    this.setState({user});
  }
  setToken = async (token) => {
    localStorage.setItem('@userAuthToken', token);
    this.setState({token});
  };
  setUser = async (user) => {
    localStorage.setItem('@userAuth', user);
    this.setState({user});
  };
  setSomethingIsLoading = (somethingIsLoading) => {
    this.setState({somethingIsLoading});
  };
  setTheme = (theme) => {
    this.setState({theme});
  };

  render() {
    return (
        <AppContext.Provider value={this.state}>
          <center> <h1> React Challenge 2 </h1> </center>
        </AppContext.Provider>
    );
  }

}

export default App;