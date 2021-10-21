import React, { Component } from 'react';
import { Route } from 'react-router';
import Dashboard from '../Dashboard/Dashboard';
import ManageAppointments from '../ManageAppointments/ManageAppointments';
import AddClientAccount from '../ManageClients/AddClient';
import EditClient from '../ManageClients/EditClient';
import ManageClients from '../ManageClients/ManageClients';
import AddSlots from '../ManageSlots/AddSlots';
import ManageSlot from '../ManageSlots/ManageSlot';
 
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

            </div>
        );
    }
}
 
export default Main;