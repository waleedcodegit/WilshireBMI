import React, { Component } from 'react';
import {Link} from 'react-router-dom';
import Axios from 'axios';
import toast from 'react-hot-toast';


class ManageAppointments extends Component {
    constructor(props) {
        super(props);
        this.state={
            msg:'',
            clients:[],
            dates:[],
            slots:[],
            client_id:'',
            date:''
        }
    }
   
    componentDidMount(){
        Axios.post('/api/get_clients').then(res=>{
            console.log(res);
            this.setState({
                clients:res.data
            })
        }) 
        Axios.post('/api/get_dates').then(res=>{
            this.setState({
                 dates:res.data.dates
            })
        }) 
       
    }
    search_slots(){
        Axios.post('/api/get_appointments_by_date',this.state).then(res=>{
            this.setState({
                 slots:res.data
            })
        }) 
    }
    delete_client(id){
        Axios.post('/api/delete_appointment',{id:id}).then(res=>{
            this.componentDidMount();
            toast.success('Slot Deleted Successfully');
        })
    }
    client_id(e){
        this.setState({
            client_id:e.target.value
        })
    }
    date(e){
        this.setState({
            date:e.target.value
        })
    }
    render() {
        return (
            <div>
                 
               <div className="container " >
               <div className="top_section_title_div">
                    <h2 className="section_title">Manage Appointments</h2>
                </div>
                <div className="card mt-3 p-3">
                        <div className="row col-md-12">
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Select Client</label>
                                <select onChange={this.client_id.bind(this)} type="Name" class="form-control "  aria-describedby="emailHelp"  >
                                <option value={''}>Select Client</option>
                                   
                                    {
                                        this.state.clients.map((data,index)=>{
                                            return(
                                                <option key={index} value={data.id}>{data.business_name}</option>
                                            )
                                        })
                                    }
                                </select>
                            </div>
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Select Date</label>
                                <select onChange={this.date.bind(this)} type="Name" class="form-control "  aria-describedby="emailHelp"  >
                                    <option  value={''}>Select Date</option>
                                    {
                                        this.state.dates.map((data,index)=>{
                                            return(
                                                <option key={index} value={data.date}>{data.date}</option>
                                            )
                                        })
                                    }
                                </select>
                            </div>
                            <div className="mt-3 ml-3 mb-3">
                                <button onClick={this.search_slots.bind(this)} className="btn btn-success">Search</button>
                            </div>
                            </div>
                            </div>
                    <table id="drop_table"
                              className="table table-light table-hover table-striped mt-5">
                                <thead>
                                    <tr  style={{fontWeight:'bold'}}>
                                        <td>Sr.</td>
                                        <td>Date</td>
                                        <td>Slot</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td >Phone</td>    
                                        <td >Height</td>    
                                        <td >Weight</td>    
                                        <td >Age</td>    
                                        <td >Area</td>    
                                        <td >BMI</td>    
                                        <td >Action</td>    
                                    </tr>
                                </thead>
                                <tbody>
                                    {
                                      this.state.slots.length > 0?  this.state.slots.map((data,index)=>{
                                            return(
                                                <tr key={index}>
                                                    <td>{index+1}</td>
                                                    <td>{data.date}</td>
                                                    <td>{data.slot ? data.slot.name : 'Slot not booked'}</td>
                                                    <td>{data.name}</td>
                                                    <td>{data.email}</td>
                                                    <td>{data.phone}</td>
                                                    <td>{data.height}</td>
                                                    <td>{data.weight}</td>
                                                    <td>{data.age}</td>
                                                    <td>{data.area}</td>
                                                    <td>{data.bmi}</td>
                                                    <td><button onClick={this.delete_client.bind(this,data.id)} className="btn btn-danger"> <i style={{color:'#ffffff'}} className="far fa-trash-alt"> </i></button></td>
                                                
                                                </tr>
                                            )
                                        }) : ''
                                    }
                                </tbody>
                            </table>
                
                </div>
            
            </div>
        );
    }
}

export default ManageAppointments;