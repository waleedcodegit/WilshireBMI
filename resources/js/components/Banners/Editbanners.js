import Axios from 'axios';
import React, { Component } from 'react';
import Swal from 'sweetalert2'
import toast, { Toaster } from 'react-hot-toast';
import ReactQuill from 'react-quill';
import 'react-quill/dist/quill.snow.css';

class Editbanner extends Component {
    constructor(props) {
        super(props);
        this.state={
            bannername:'',
            image:'',
            id:this.props.match.params.id // You can also pass a Quill Delta here
        }
       
    }
    componentDidMount(){
        Axios.post('/api/get_banner_by_id',{ id:this.props.match.params.id}).then(res=>{
            console.log(res);
            this.setState({
                bannername:res.data.banner_name,
                image:res.data.image,
            })
        })
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
  
    update_banner(){
        Axios.post('/api/update_banner',this.state).then(res=>{
            console.log(res);
            if(res.data.status == 200){
                toast.success('Banner Updated SuccessFully');
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
                    <h2 className="section_title">Edit Banner</h2>
                </div>
                    <div className="card mt-3 p-3">
                        <div className="row col-md-12">
                            <div class="form-group input_div col-md-12">
                                <label className="input_label" for="exampleInputEmail1">Banner Name</label>
                                <input onChange={this.Bannername.bind(this)} value={this.state.bannername}  type="Name" class="form-control "  aria-describedby="emailHelp"  />
                            </div>
                        </div>
                        <div className="row col-md-12">
                            <div class="form-group input_div col-md-12">
                                <label className="input_label" for="exampleInputEmail1">Image</label>
                                <input onChange={this.Image.bind(this)} type="file"   class="form-control "  aria-describedby="emailHelp" ></input>
                                <img src={this.state.image} style={{width:'50%'}}></img>
                            </div>
                        </div>
                        {
                            this.state.error_string != '' ?
                            <p className="text-center text-danger">{this.state.error_string}</p>
                            : null
                        }
                        <div className="mt-3 ml-3 mb-3">
                            <button onClick={this.update_banner.bind(this)} className="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>
               
            </div>
        );
    }
}
export default Editbanner;