import React, { Component } from 'react';
import {Link} from 'react-router-dom';
import Axios from 'axios';
import toast from 'react-hot-toast';



class EventsList extends Component {
    constructor(props) {
        super(props);
        this.state={
            msg:'',
            event:[],
            dates:[],
            slots:[],
            client_id:'',
            date:''
        }
    }
   
    componentDidMount(){
        Axios.post('/api/get_events').then(res=>{
            console.log(res);
            
            this.setState({
                event:res.data.event
            })
        })  
    // Axios.post('/api/get_coming_events').then(res=>{
    //     console.log(res);
    //     this.setState({
    //         event:res.data.event
    //     })
    // })  
       
    }
    search_slots(){
        Axios.post('/api/get_slots_by_date',this.state).then(res=>{
            this.setState({
                 slots:res.data
            })
        }) 
    }
    delete_client(id){
        Axios.post('/api/delete_event',{id:id}).then(res=>{
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
                    <h2 className="section_title">Alll Events List</h2>
                </div>
                    <table id="drop_table"
                              className="table table-light table-hover table-striped mt-5">
                                <thead>
                                    <tr  style={{fontWeight:'bold'}}>
                                        <td>Sr.</td>
                                       
                                        <td>Name</td>
                                        <td>Description</td>  
                                        <td>Start Time</td>
                                        <td>End Time</td>
                                        <td>Image</td>
                                        <td>Edit</td>  
                                        <td>Delete</td>    
                                    </tr>
                                </thead>
                                <tbody>
                                    {
                                      this.state.event.length > 0? 
                                       this.state.event.map((data,index)=>{
                                            return(
                                                <tr key={index}>
                                                    <td>{index+1}</td>
                                                    <td>{data.event_name}</td>
                                                    <td>{data.description}</td>
                                                    <td>{data.startdate}</td>
                                                    <td>{data.enddate}</td>
                                                    <td><img src={data.image } style={{width:'100px'}}></img></td>
                                                   
                                                 
                                                     <td><Link to={`/admin/edit-events/${data.id}`}><button className="btn btn-warning"> <i style={{color:'#ffffff'}} className="far fa-edit"> </i></button></Link></td>
                                                    {/* <td><button onClick={this.delete_client.bind(this,data.id)} className="btn btn-danger"> <i style={{color:'#ffffff'}} className="far fa-trash-alt"> </i></button></td>  */}
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

export default EventsList;