import React, { Component } from 'react';
import {Link} from 'react-router-dom';
import Axios from 'axios';
import toast from 'react-hot-toast';


class ManageClients extends Component {
    constructor(props) {
        super(props);
        this.state={
            msg:'',
            clients:[],
        }
    }
    componentDidMount(){
        Axios.post('/api/get_clients').then(res=>{
            console.log(res);
            this.setState({
                clients:res.data
            })
        })  
        
    }
    delete_client(id){
        Axios.post('/api/delete_client',{id:id}).then(res=>{
            this.componentDidMount();
            toast.success('Client Deleted Successfully');
        })
    }
    render() {
        return (
            <div>
                 
               <div className="container " >
               <div className="top_section_title_div">
                    <h2 className="section_title">Manage Clients</h2>
                </div>
                    <table id="drop_table"
                              className="table table-light table-hover table-striped mt-5">
                                <thead>
                                    <tr  style={{fontWeight:'bold'}}>
                                        <td>Sr.</td>
                                        <td>Business Name</td>
                                        <td>Address</td>
                                        <td>Phone Number</td>
                                        <td>Status</td>
                                        <td colSpan="2">Action</td>    
                                    </tr>
                                </thead>
                                <tbody>
                                    {
                                      this.state.clients.length > 0?  this.state.clients.map((data,index)=>{
                                            return(
                                                <tr key={index}>
                                                    <td>{index+1}</td>
                                                    <td>{data.business_name}</td>
                                                    <td>{data.business_address}</td>
                                                    <td>{data.phone}</td>
                                                    <td>{data.status ? 'Active' : 'Disabled'}</td>
                                                    {/* <td><Link to={`/admin/edit-client/${data.id}`}><button className="btn btn-warning"> <i style={{color:'#ffffff'}} className="far fa-edit"> </i></button></Link></td>
                                                    <td><button onClick={this.delete_client.bind(this,data.id)} className="btn btn-danger"> <i style={{color:'#ffffff'}} className="far fa-trash-alt"> </i></button></td> */}
                                                    <td><Link to={`/admin/edit-user/${data.id}`}><button className="btn btn-warning"> <i style={{color:'#ffffff'}} className="far fa-edit"> </i></button></Link></td>
                                                
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

export default ManageClients;