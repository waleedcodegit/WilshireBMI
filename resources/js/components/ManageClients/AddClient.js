import Axios from 'axios';
import React, { Component } from 'react';
import Swal from 'sweetalert2'
import toast, { Toaster } from 'react-hot-toast';

class AddClientAccount extends Component {
    constructor(props) {
        super(props);
        this.state={
            business_name:'',
            username:'',
            password:'',
            confirm_password:'',
            business_address:'',
            telephone:'',
            error_string:''
        }
    }
    componentDidMount(){
       
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
  
    add_client_account(){
     
                Axios.post('/api/add_client',this.state).then(res=>{
                        console.log(res);
                        if(res.data.status){
                          toast.success('Client Added SuccessFully');
                          this.props.history.push('/admin/users');
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
                    <h2 className="section_title">Add New Client Account</h2>
                </div>
                    <div className="card mt-3 p-3">
                        <div className="row col-md-12">
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Business Name</label>
                                <input onChange={this.business_name.bind(this)} type="Name" class="form-control "  aria-describedby="emailHelp"  />
                            </div>
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Business Address</label>
                                <input onChange={this.business_address.bind(this)} type="Name" class="form-control "  aria-describedby="emailHelp" />
                            </div>
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Username</label>
                                <input onChange={this.username.bind(this)}  type="email" class="form-control "  aria-describedby="emailHelp" />
                            </div>
                          
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1"> Telephone</label>
                                <input onChange={this.telephone.bind(this)}  type="email" class="form-control "  aria-describedby="emailHelp"  />
                            </div>
                        </div>
                        <div className="row col-md-12">
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Password</label>
                                <input onChange={this.password.bind(this)} type="email" class="form-control "  aria-describedby="emailHelp"  />
                            </div>
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Confirm Password</label>
                                <input onChange={this.confirm_password.bind(this)} type="email" class="form-control " aria-describedby="emailHelp"  />
                            </div>
                           
                          
                        </div>
                        {
                            this.state.error_string != '' ?
                            <p className="text-center text-danger">{this.state.error_string}</p>
                            : null
                        }
                        <div className="mt-3 ml-3 mb-3">
                            <button onClick={this.add_client_account.bind(this)} className="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
               
            </div>
        );
    }
}
export default AddClientAccount;