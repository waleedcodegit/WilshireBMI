import Axios from 'axios';
import React, { Component } from 'react';
import Swal from 'sweetalert2'
import toast, { Toaster } from 'react-hot-toast';

class EditClient extends Component {
    constructor(props) {
        super(props);
        this.state={
            business_name:'',
            username:'',
            password:'',
            confirm_password:'',
            business_address:'',
            telephone:'',
            error_string:'',
            id:this.props.match.params.id,
            status:1
        }
    }
    componentDidMount(){
    //    Axios.post('/api/get_client_by_id',{ id:this.props.match.params.id}).then(res=>{
    //        console.log(res);
    //        this.setState({
    //            business_name:res.data.business_name,
    //            business_address:res.data.business_address,
    //            username:res.data.username,
    //            password:res.data.password,
    //            confirm_password:res.data.password,
    //            status:res.data.status,
    //            telephone:res.data.phone
    //        })
    //    })
    }
    business_address(e){
        this.setState({
            business_address:e.target.value
        })
    }
    business_name(e){
        this.setState({
            business_name:e.target.value
        })
    }
    telephone(e){
        this.setState({
            telephone:e.target.value
        })
    }
    username(e){
        this.setState({
            username:e.target.value
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
    status(e){
        this.setState({
            status:e.target.value
        })
    }
    Update_client_account(){
     
                Axios.post('/api/update_client',this.state).then(res=>{
                        console.log(res);
                        if(res.data.status){
                          toast.success('Client Updated SuccessFully');
                          this.props.history.push('/admin/users')

                        }else{
                            this.setState({
                                error_string:res.data.message
                            })
                            toast.error('Error - '+res.data.message);
                        }
                })

        
    }
    render() {
        return (
            <div>
                
                <div className="container">
                <div className="top_section_title_div">
                    <h2 className="section_title">Edit Client Account</h2>
                </div>
                    <div className="card mt-3 p-3">
                        <div className="row col-md-12">
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Business Name</label>
                                <input value={this.state.business_name } onChange={this.business_name.bind(this)} type="Name" class="form-control "  aria-describedby="emailHelp"  />
                            </div>
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Business Address</label>
                                <input value={this.state.business_address} onChange={this.business_address.bind(this)} type="Name" class="form-control "  aria-describedby="emailHelp" />
                            </div>
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Username</label>
                                <input disabled value={this.state.username} onChange={this.username.bind(this)}  type="email" class="form-control "  aria-describedby="emailHelp" />
                            </div>
                          
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1"> Telephone</label>
                                <input value={this.state.telephone} onChange={this.telephone.bind(this)}  type="email" class="form-control "  aria-describedby="emailHelp"  />
                            </div>
                        </div>
                        <div className="row col-md-12">
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Password</label>
                                <input value={this.state.password } onChange={this.password.bind(this)} type="email" class="form-control "  aria-describedby="emailHelp"  />
                            </div>
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Confirm Password</label>
                                <input value={this.state.confirm_password } onChange={this.confirm_password.bind(this)} type="email" class="form-control " aria-describedby="emailHelp"  />
                            </div>
                           
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Status</label>
                                <select value={this.state.status } onChange={this.status.bind(this)} type="email" class="form-control " aria-describedby="emailHelp"  
                                >
                                    <option value = {1}>Active</option>
                                    <option value = {0}>Disabled</option>
                                </select>
                            </div>
                        </div>

                        {
                            this.state.error_string != '' ?
                            <p className="text-center text-danger">{this.state.error_string}</p>
                            : null
                        }
                        <div className="mt-3 ml-3 mb-3">
                            <button onClick={this.Update_client_account.bind(this)} className="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
               
            </div>
        );
    }
}
export default EditClient;