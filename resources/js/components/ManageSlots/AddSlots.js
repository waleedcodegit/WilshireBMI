import Axios from 'axios';
import React, { Component } from 'react';
import Swal from 'sweetalert2'
import toast, { Toaster } from 'react-hot-toast';

class AddSlots extends Component {
    constructor(props) {
        super(props);
        this.state={
            client_id:'',
            date:'',
            start_time:'',
            end_time:'',
            business_address:'',
            telephone:'',
            error_string:'',
            clients:[],
            dates:[]
        }
    }
    componentDidMount(){
       Axios.post('/api/get_clients').then(res=>{
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
    start_time(e){
        this.setState({
            start_time:e.target.value
        })
    }
    end_time(e){
        this.setState({
            end_time:e.target.value
        })
    }

   
    password(e){
        this.setState({
            password:e.target.value
        })
    }
    confirm_password(e){
        this.setState({
            confirm_password:e.target.value
        })
    }
  
    add_client_account(){
     
                Axios.post('/api/create_slots',this.state).then(res=>{
                        console.log(res);
                        // if(res.data.status == 200){
                        //   toast.success('Slots Added SuccessFully');
                        // //   this.props.history.push('/admin/users');
                        // }else{
                        //     this.setState({
                        //         error_string:res.data.message
                        //     })
                        //     toast.error('Error - '+res.data.message);
                        // }
                        toast.success('Slots Added SuccessFully');

                })

        
    }
    render() {
        return (
            <div>
                
                <div className="container">
                <div className="top_section_title_div">
                    <h2 className="section_title">Create New Slots</h2>
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
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Start Time</label>
                                <input onChange={this.start_time.bind(this)}  type="time" class="form-control "  aria-describedby="emailHelp" />
                            </div>
                          
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1"> End Time</label>
                                <input onChange={this.end_time.bind(this)}  type="time" class="form-control "  aria-describedby="emailHelp"  />
                            </div>
                        </div>
                        
                        {
                            this.state.error_string != '' ?
                            <p className="text-center text-danger">{this.state.error_string}</p>
                            : null
                        }
                        <div className="mt-3 ml-3 mb-3">
                            <button onClick={this.add_client_account.bind(this)} className="btn btn-success">Create</button>
                        </div>
                    </div>
                </div>
               
            </div>
        );
    }
}
export default AddSlots;