import Axios from 'axios';
import React, { Component } from 'react';
import toast from 'react-hot-toast';
import Swal from 'sweetalert2'
class Login extends Component {
    constructor(props) {
        super(props);
        this.state = {
            email: '',
            password: '',
            loading: false,
        };
    }

    componentDidMount() {
        let senderData = {
            token: window.localStorage.getItem('testapistring'),
        }
        Axios.post('/api/check-auth-admin', senderData).then(res => {
            if (res.data.status == 200) {
                this.props.history.push('/admin');
            }
        })
    }

    adminemail(event) {
        this.setState({
            email: event.target.value
        })
    }
    password(event) {
        this.setState({
            password: event.target.value
        })
    }

    login(event) {

        event.preventDefault();
        let senderData = {
            email: this.state.email,
            password: this.state.password,
        }
        this.setState({
            loading: true
        })
        console.log('hello');
        Axios.post('/api/login-admin', senderData).then(res => {
            this.setState({
                loading: false
            })
            if (res.data.status == 200) {
                window.localStorage.setItem('testapistring', res.data.admin.token);
                this.props.history.push('/admin');
                toast.success('Login Successfully');
                // Swal.fire({
                //     icon: 'success',
                //     title: 'Login Successfully',
                //     showConfirmButton: false,
                //     timer: 1500
                // })
            } else {
                toast.error(res.data.msg);
                // Swal.fire({
                //     icon: 'error',
                //     title: res.data.msg,
                //     showConfirmButton: false,
                //     timer: 1500
                // })
            }
        })
    }

    render() {
        return (
            <section className="section">
                <div className="container mt-5">
                    <div className="row">
                        <div className="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                            <div className="card card-primary">
                                <div className="card-header">
                                    <h4>Login</h4>
                                </div>
                                <div className="card-body">
                                    <form method="POST" action="#" className="needs-validation" noValidate>
                                        <div className="form-group">
                                            <label htmlFor="email">Email</label>
                                            <input onChange={this.adminemail.bind(this)} id="email" type="email" className="form-control" name="email" tabIndex={1} required autofocus />
                                            <div className="invalid-feedback">
                                                Please fill in your email
                                            </div>
                                        </div>
                                        <div className="form-group">
                                            <div className="d-block">
                                                <label htmlFor="password" className="control-label">Password</label>
                                                
                                            </div>
                                            <input onChange={this.password.bind(this)} id="password" type="password" className="form-control" name="password" tabIndex={2} required />
                                            <div className="invalid-feedback">
                                                please fill in your password
                                            </div>
                                        </div>
                                      
                                        <div className="form-group">
                                            <button onClick={this.login.bind(this)} type="submit" className="btn btn-primary btn-lg btn-block" tabIndex={4}>
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                   
                                </div>
                            </div>
                            <div className="mt-5 text-muted text-center">
                                Don't have an account? <a href="auth-register.html">Create One</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        );
    }
}

export default Login;