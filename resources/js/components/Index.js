import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter , Route } from 'react-router-dom';
import Login from './Auth/Login';
import App from './Index/App';
import './app.css';
import toast, { Toaster } from 'react-hot-toast';

class MainIndex extends React.Component {
  render(){
    return (
        <div className="main-app" id="app">
            <BrowserRouter>
                <Route exact path="/" component={Login}></Route>
                <Route path="/admin" component={App}></Route>

            </BrowserRouter>
            <Toaster></Toaster>
        </div>
    );
  }
}

export default MainIndex;

if (document.getElementById('root')) {
    ReactDOM.render(<MainIndex />, document.getElementById('root'));
}
