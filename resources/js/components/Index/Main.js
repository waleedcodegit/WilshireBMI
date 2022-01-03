import React, { Component } from 'react';
import { Route } from 'react-router';
import Dashboard from '../Dashboard/Dashboard';
import ManageAppointments from '../ManageAppointments/ManageAppointments';
import AddClientAccount from '../ManageClients/AddClient';
import EditClient from '../ManageClients/EditClient';
import ManageClients from '../ManageClients/ManageClients';
import AddSlots from '../ManageSlots/AddSlots';
import ManageSlot from '../ManageSlots/ManageSlot';
import AddEvents from '../ManageEvent/AddEvents';
import EventsList from '../ManageEvent/EventsList';
import EditEvents from '../ManageEvent/Editevents';
import Addbanners from '../Banners/Addbanners';
import Allbanners from '../Banners/Allbanners';
import Editbanner from '../Banners/Editbanners';
 
class Main extends Component {
    constructor(props) {
        super(props);
        this.state = {};
    }
    render() { 
        return (
            <div>
                <Route exact path="/admin" component={Dashboard}></Route>
                <Route  path="/admin/add-user" component={AddClientAccount}></Route>
                <Route path="/admin/edit-user/:id" component={EditClient}></Route>
                <Route path="/admin/users" component={ManageClients}></Route>

                <Route  path="/admin/add-slots" component={AddSlots}></Route>
                <Route path="/admin/slots" component={ManageSlot}></Route>
                <Route path="/admin/appointments" component={ManageAppointments}></Route>

                <Route  path="/admin/add-events" component={AddEvents}></Route>
                <Route path="/admin/list-events" component={EventsList}></Route>
                <Route path="/admin/edit-events/:id" component={EditEvents}></Route>

                <Route path="/admin/add-banners" component={Addbanners}></Route>
                <Route path="/admin/list-banners" component={Allbanners}></Route>
                <Route path="/admin/edit-banner/:id" component={Editbanner}></Route>


            </div>
        );
    }
}
 
export default Main;