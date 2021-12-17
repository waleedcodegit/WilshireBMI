import Axios from 'axios';
import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import Main from './Main';

class App extends Component {
    constructor(props) {
        super(props);
        this.state = {
         is_login:false
        };
    }

    componentDidMount() {
        let senderData = {
            token: window.localStorage.getItem('testapistring'),
        }
        Axios.post('/api/check-auth-admin', senderData).then(res => {
            console.log(res)
            if (res.data.status != 200) {
                this.props.history.push('/');
            }else{
                this.setState({
                    is_login:true
                })
            }
        })
    }
    render() {
        return (
            <div >
                        
                      
                <div className={this.state.is_login ? "main-wrapper main-wrapper-1 " : "main-wrapper main-wrapper-1 opacity_zero" }>
                    <div className="navbar-bg" />
                    <nav className="navbar navbar-expand-lg main-navbar sticky">
                        <div className="form-inline mr-auto">
                            <ul className="navbar-nav mr-3">
                                <li><a href="#" data-toggle="sidebar" className="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify" /></a></li>
                                <li><a href="#" className="nav-link nav-link-lg fullscreen-btn">
                                    <i data-feather="maximize" />
                                </a></li>
                               
                            </ul>
                        </div>
                        
                    </nav>
                    <div className="main-sidebar sidebar-style-2">
                        <aside id="sidebar-wrapper">
                            <div className="sidebar-brand">
                                <a href="/">
                                 {/* <img alt="image" src="assets/img/logo.png" className="header-logo" /> */}
                                 <span className="logo-name">GlossMeUp</span>
                                </a>
                            </div>
                            <ul className="sidebar-menu">
                                <li className="menu-header">Main</li>
                                <li className="dropdown active">
                                    <a href="/admin" className="nav-link"><i data-feather="monitor" /><span>Dashboard</span></a>
                                </li>
                                <li className="dropdown">
                                    <a href="#" className="menu-toggle nav-link has-dropdown"><i data-feather="briefcase" /><span>Manage Events</span></a>
                                    <ul className="dropdown-menu">
                                        <li><Link className="nav-link" to="/admin/add-events">Create Events</Link></li>
                                        <li><Link className="nav-link" to="/admin/list-events">Events List</Link></li>
                                    </ul>
                                </li>
                                {/* <li className="dropdown">
                                    <a href="#" className="menu-toggle nav-link has-dropdown"><i data-feather="briefcase" /><span>Manage Slots</span></a>
                                    <ul className="dropdown-menu">
                                        <li><Link className="nav-link" to="/admin/add-slots">Create Slots</Link></li>
                                        <li><Link className="nav-link" to="/admin/slots">Slots</Link></li>
                                    </ul>
                                </li> */}
                                {/* <li className="dropdown">
                                    <a href="#" className="menu-toggle nav-link has-dropdown"><i data-feather="briefcase" /><span>Manage Appointments</span></a>
                                    <ul className="dropdown-menu">
                                        <li><a className="nav-link" href="widget-chart.html">Create Appointment</a></li>
                                        <li><Link className="nav-link" to="/admin/appointments">Appointments</Link></li>
                                    </ul>
                                </li> */}
                                {/* <li className="dropdown">
                                    <a href="#" className="menu-toggle nav-link has-dropdown"><i data-feather="briefcase" /><span>Manage Users</span></a>
                                    <ul className="dropdown-menu">
                                        <li><Link className="nav-link" to="/admin/add-user">Create User</Link></li>
                                        <li><Link className="nav-link" to="/admin/users">Users</Link></li>
                                    </ul>
                                </li> */}
                            </ul>
                        </aside>
                    </div>
                    {/* Main Content */}
                    <div className="main-content">
                   
                       <Main></Main>
                        <div className="settingSidebar">
                            <a href="javascript:void(0)" className="settingPanelToggle"> <i className="fa fa-spin fa-cog" />
                            </a>
                            <div className="settingSidebar-body ps-container ps-theme-default">
                                <div className=" fade show active">
                                    <div className="setting-panel-header">Setting Panel
                                    </div>
                                    <div className="p-15 border-bottom">
                                        <h6 className="font-medium m-b-10">Select Layout</h6>
                                        <div className="selectgroup layout-color w-50">
                                            <label className="selectgroup-item">
                                                <input type="radio" name="value" defaultValue={1} className="selectgroup-input-radio select-layout" defaultChecked />
                                                <span className="selectgroup-button">Light</span>
                                            </label>
                                            <label className="selectgroup-item">
                                                <input type="radio" name="value" defaultValue={2} className="selectgroup-input-radio select-layout" />
                                                <span className="selectgroup-button">Dark</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div className="p-15 border-bottom">
                                        <h6 className="font-medium m-b-10">Sidebar Color</h6>
                                        <div className="selectgroup selectgroup-pills sidebar-color">
                                            <label className="selectgroup-item">
                                                <input type="radio" name="icon-input" defaultValue={1} className="selectgroup-input select-sidebar" />
                                                <span className="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Light Sidebar"><i className="fas fa-sun" /></span>
                                            </label>
                                            <label className="selectgroup-item">
                                                <input type="radio" name="icon-input" defaultValue={2} className="selectgroup-input select-sidebar" defaultChecked />
                                                <span className="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Dark Sidebar"><i className="fas fa-moon" /></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div className="p-15 border-bottom">
                                        <h6 className="font-medium m-b-10">Color Theme</h6>
                                        <div className="theme-setting-options">
                                            <ul className="choose-theme list-unstyled mb-0">
                                                <li title="white" className="active">
                                                    <div className="white" />
                                                </li>
                                                <li title="cyan">
                                                    <div className="cyan" />
                                                </li>
                                                <li title="black">
                                                    <div className="black" />
                                                </li>
                                                <li title="purple">
                                                    <div className="purple" />
                                                </li>
                                                <li title="orange">
                                                    <div className="orange" />
                                                </li>
                                                <li title="green">
                                                    <div className="green" />
                                                </li>
                                                <li title="red">
                                                    <div className="red" />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div className="p-15 border-bottom">
                                        <div className="theme-setting-options">
                                            <label className="m-b-0">
                                                <input type="checkbox" name="custom-switch-checkbox" className="custom-switch-input" id="mini_sidebar_setting" />
                                                <span className="custom-switch-indicator" />
                                                <span className="control-label p-l-10">Mini Sidebar</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div className="p-15 border-bottom">
                                        <div className="theme-setting-options">
                                            <label className="m-b-0">
                                                <input type="checkbox" name="custom-switch-checkbox" className="custom-switch-input" id="sticky_header_setting" />
                                                <span className="custom-switch-indicator" />
                                                <span className="control-label p-l-10">Sticky Header</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div className="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                        <a href="#" className="btn btn-icon icon-left btn-primary btn-restore-theme">
                                            <i className="fas fa-undo" /> Restore Default
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    { 
                        !this.state.is_login ?
                        <div className="text-center">
                            <img  style={{marginTop:'5%'}} src="/images/spinner.gif"></img>
                        </div>
                        : null
                    }
            </div>

        );
    }
}

export default App;