import React, { Component } from 'react';
import {Link} from 'react-router-dom';
import Axios from 'axios';
import toast from 'react-hot-toast';



class EventsList extends Component {
    constructor(props) {
        super(props);
        this.state={
            banners:[]
        }
    }
   
    componentDidMount(){
        Axios.post('/api/get_banners').then(res=>{
            console.log(res);
            
            this.setState({
                banners:res.data.banners
            })
        })
    }
    delete_banner(id){
        Axios.post('/api/delete_banner',{id:id}).then(res=>{
            this.componentDidMount();
            toast.success('Banner Deleted Successfully');
        })
    }
    render() {
        return (
            <div>
                 
               <div className="container " >
               <div className="top_section_title_div">
                    <h2 className="section_title">All Banners</h2>
                </div>
                    <table id="drop_table"
                              className="table table-light table-hover table-striped mt-5">
                                <thead>
                                    <tr  style={{fontWeight:'bold'}}>
                                        <td>Sr.</td>
                                       
                                        <td>Banner Name</td>
                                        <td>Image</td>    
                                    </tr>
                                </thead>
                                <tbody>
                                    {
                                      this.state.event.length > 0? 
                                       this.state.banners.map((data,index)=>{
                                            return(
                                                <tr key={index}>
                                                    <td>{index+1}</td>
                                                    <td>{data.banner_name}</td>
                                                    <td><img src={data.image } style={{width:'100px'}}></img></td>
                                                   
                                                 
                                                     <td><Link to={`/admin/edit-banner/${data.id}`}><button className="btn btn-warning"> <i style={{color:'#ffffff'}} className="far fa-edit"> </i></button></Link></td>
                                                    {/* <td><button onClick={this.delete_client.bind(this,data.id)} className="btn btn-danger"> <i style={{color:'#ffffff'}} className="far fa-trash-alt"> </i></button></td>  */}
                                                    <td><button onClick={this.delete_banner.bind(this,data.id)} className="btn btn-danger"> <i style={{color:'#ffffff'}} className="far fa-trash-alt"> </i></button></td>
                                                
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