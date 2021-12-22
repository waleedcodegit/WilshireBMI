import Axios from 'axios';
import React, { Component } from 'react';
import Swal from 'sweetalert2'
import toast, { Toaster } from 'react-hot-toast';
import ReactQuill from 'react-quill';
import 'react-quill/dist/quill.snow.css';

class AddEvents extends Component {
    constructor(props) {
        super(props);
        this.state={
            eventname:'',
            startdate:'',
            enddate:'',
            image:'',
            business_address:'',
            telephone:'',
            error_string:'',
            description: '' , // You can also pass a Quill Delta here
            
        }
       
    }
    componentDidMount(){
       
    }
    Description(event) {
        this.setState({
            description: event
        })
    }
    enddate(e){
        this.setState({
            enddate:e.target.value
        })
    }
    Eventname(e){
        this.setState({
            eventname:e.target.value
        })
    }

   
    startdate(e){
        this.setState({
            startdate:e.target.value
        })
    }
    File(e){
        this.setState({
            file:e.target.value
        })
    }
    // File(event) {
    //     if (event.target.files) {
    //         const files = Array.from(event.target.files);
    //         const promises = files.map(file => {
    //             return (new Promise((resolve, reject) => {
    //                 const reader = new FileReader();
    //                 reader.addEventListener('load', (ev) => {
    //                     resolve(ev.target.result);
    //                 });
    //                 reader.addEventListener('error', reject);
    //                 reader.readAsDataURL(file);
    //             }))
    //         });
    //         Promise.all(promises).then(images => {
    //             this.setState({
    //                 file: images[0]
    //             })
    //         }, error => { console.error(error); });
    //     }
    // }
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
    youtube_id(e){
        this.setState({
            video_youtube_id:e.target.value
        })
    }
    add_event(){
     
                Axios.post('/api/add_event',this.state).then(res=>{
                        console.log(res);
                        if(res.data.status){
                          toast.success('Events Added SuccessFully');
                          this.props.history.push('/admin/list-events');
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
                    <h2 className="section_title">Add New Event</h2>
                </div>
                    <div className="card mt-3 p-3">
                        <div className="row col-md-12">
                            <div class="form-group input_div col-md-12">
                                <label className="input_label" for="exampleInputEmail1">Event Name</label>
                                <input onChange={this.Eventname.bind(this)}  type="Name" class="form-control "  aria-describedby="emailHelp"  />
                            </div>
                        </div>
                        <div className="row col-md-12">
                            <div class="form-group input_div col-md-12">
                                <label className="input_label" for="exampleInputEmail1">Event Image<span>  (image size 1200*638)</span></label>
                                <input onChange={this.Image.bind(this)} type="file"  class="form-control "  aria-describedby="emailHelp"></input>
                                <img src={this.state.image} style={{width:'50%'}}></img>
                            </div>
                            {/* <div className="row col-md-12">
                            <div class="form-group input_div col-md-12">
                                <label className="input_label" for="exampleInputEmail1">Pdf file</label>
                                <input onChange={this.File.bind(this)} type="file"  class="form-control "  aria-describedby="emailHelp"></input>
                                <img src={this.state.image} style={{width:'50%'}}></img>
                            </div>
                        <h1 className="col-md-1"></h1>
                       
                   </div> */}
                             {/* <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">PDF File</label>
                                <input onChange={this.file.bind(this)} type="file"  class="form-control "  aria-describedby="emailHelp"></input>
                                <img src={this.state.image} style={{width:'50%'}}></img>
                            </div>  */}
                           
                        </div>
                        <div className="row col-md-12">
                            <div class="form-group input_div col-md-12">
                            <label className="input_label" for="exampleInputEmail1">Youtube Video Id</label>
                            <input  onChange={this.youtube_id.bind(this)} type="email" class="form-control " aria-describedby="emailHelp" />
                            </div>
                        </div>
                        <div className="row col-md-12" style={{height:"50px"}}>
                        <div class="form-group input_div col-md-12">
                            <label className="input_label" for="exampleInputEmail1">Description</label>
                                     <ReactQuill value={this.state.description} class="form-control "  aria-describedby="emailHelp" onChange={this.Description.bind(this)}/>
                        </div>
                        </div>
                      
                        <div className="row col-md-12">
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">Start Date</label>
                                <input onChange={this.startdate.bind(this)} type="date" class="form-control "  aria-describedby="emailHelp"  />
                            </div>
                            <div class="form-group input_div col-md-6">
                                <label className="input_label" for="exampleInputEmail1">End Date</label>
                                <input onChange={this.enddate.bind(this)} type="date"  class="form-control "  aria-describedby="emailHelp"></input>
                            </div>
                            
                          
                        </div>
                        {
                            this.state.error_string != '' ?
                            <p className="text-center text-danger">{this.state.error_string}</p>
                            : null
                        }
                        <div className="mt-3 ml-3 mb-3">
                            <button onClick={this.add_event.bind(this)} className="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
               
            </div>
        );
    }
}
export default AddEvents;