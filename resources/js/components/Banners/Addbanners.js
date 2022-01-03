import Axios from 'axios';
import React, { Component } from 'react';
import Swal from 'sweetalert2'
import toast, { Toaster } from 'react-hot-toast';
import ReactQuill from 'react-quill';
import 'react-quill/dist/quill.snow.css';

class Addbanners extends Component {
    constructor(props) {
        super(props);
        this.state={
            bannername:'',
            image:'',
            
        }
       
    }
    componentDidMount(){
       
    }
    Bannername(e){
        this.setState({
            bannername:e.target.value
        })
    }
    Image(event) {
        if (event.target.files) {
            const files = Array.from(event.target.files);
            const promises = files.map(file => {
                return (new Promise((resolve, reject) => {
                    const reader = new FileReader();
                    reader.addEventListener('load', (ev) => {
                        resolve(ev.target.result);
                    });
                    reader.addEventListener('error', reject);
                    reader.readAsDataURL(file);
                }))
            });
            Promise.all(promises).then(images => {
                this.setState({
                    image: images[0]
                })
            }, error => { console.error(error); });
        }
    }
    upload_banner(){
     
        Axios.post('/api/upload_banner',this.state).then(res=>{
                console.log(res);
                if(res.data.status){
                  toast.success('Banner Added SuccessFully');
                  this.props.history.push('/admin/list-banners');
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
                    <h2 className="section_title">Add New Banner</h2>
                </div>
                    <div className="card mt-3 p-3">
                        <div className="row col-md-12">
                            <div class="form-group input_div col-md-12">
                                <label className="input_label" for="exampleInputEmail1">Banner Name</label>
                                <input onChange={this.Bannername.bind(this)}  type="Name" class="form-control "  aria-describedby="emailHelp"  />
                            </div>
                        </div>
                        <div className="row col-md-12">
                            <div class="form-group input_div col-md-12">
                                <label className="input_label" for="exampleInputEmail1">Banner Image</label>
                                <input onChange={this.Image.bind(this)} type="file"  class="form-control "  aria-describedby="emailHelp"></input>
                                <br/>
                                <img src={this.state.image} style={{width:'50%'}}></img>
                            </div>
                        </div>
                        {
                            this.state.error_string != '' ?
                            <p className="text-center text-danger">{this.state.error_string}</p>
                            : null
                        }
                        <div className="mt-3 ml-3 mb-3">
                            <button onClick={this.upload_banner.bind(this)} className="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
               
            </div>
        );
    }
}
export default Addbanners;