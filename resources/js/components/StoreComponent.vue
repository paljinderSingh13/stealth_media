<template>
<div>
        <div class="row">
          <transition name="bounce">
            <div @click="success_message=false;" v-show="success_message" class="col-8 bg-info p-3" style="top: 260px; left: 1000px; position: fixed; padding: 20px; z-index: 1;">
                <h3>{{success_message}}</h3>
            </div>
        </transition>
                    <div class="col-12 mb-5">
                        <a  @click="newForm(); success=false; danger=false;" v-show="newFormBtn"  class="btn pull-right btn-primary  mt-3 ml-3">Add Project</a>
                        <a v-show="formShow"  @click="formShow=false; newFormBtn=true;success=false; danger=false;"  class="btn btn-danger  mt-3 ml-3">Cancel</a>
                    </div>
            </div>
<transition name="bounce">


        <div class="row" v-show="formShow">
<!-- left -->
           <div class="col-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"> Project Details</h5>
                        <div class="form-row">
                            <div class="form-group col-md-12 position-relative error-l-50">
                                <input v-model="form.id" type="hidden"  class="form-control">
                                <label for="name">Project Name</label>
                                <input v-model="form.name" type="text"   class="form-control"  id="name" placeholder="">

                            </div>
                        </div>
                         <div class="form-group">
                            <label for="client_name">Client Name</label>
                              <input v-model="form.client_name"   type="text" class="form-control"  id="client_name" placeholder="">
                              <span v-show="danger" v-if="errors.client_name && form.client_name==null" class="text-danger">
                                 {{errors.client_name[0]}} </span>
                        </div>

                        <div class="form-group">
                            <label for="contact_number">Client Phone</label>
                              <input v-model="form.client_phone"   type="text" class="form-control"  id="contact_number" placeholder="">
                              <span v-show="danger" v-if="errors.client_phone && form.client_phone==null" class="text-danger">
                                 {{errors.client_phone[0]}} </span>
                        </div>

                        <div class="form-group">
                            <label for="client_email">Client Email</label>
                            <input type="email"  v-model="form.client_email" class="form-control"  id="client_email" placeholder="">
                            <span v-show="danger" v-if="errors.client_email && form.client_email==null" class="text-danger">
                              {{errors.client_email[0]}} </span>
                        </div>

                         <div class="form-group">
                            <label for="client_address">Client Address </label>
                            <textarea class="form-control" v-model="form.client_address" id="client_address" cols="30" rows="5"></textarea>
                            <span v-show="danger" v-if="errors.client_address && form.client_address==null" class="text-danger">
                              {{errors.client_address[0]}} </span>
                        </div>
                    </div>
                </div>
<!-- Time zone -->
                <div class="card mb-4">
                     <div class="card-body">
                        <h5 class="card-title">Website Info</h5>
                        <div class="form-group">
                            <label for="website_url">Website Url</label>
                              <input v-model="form.website_url"   type="text" class="form-control"  id="website_url" placeholder="">
                              <span v-show="danger" v-if="errors.website_url && form.website_url==null" class="text-danger">
                                 {{errors.contact_number[0]}} </span>
                        </div>
                         <div class="form-group">
                            <label for="drive_link">Drive Link</label>
                              <input v-model="form.drive_link"   type="text" class="form-control"  id="drive_link" placeholder="">
                              <span v-show="danger" v-if="errors.client_name && form.client_name==null" class="text-danger"> {{errors.contact_number[0]}} </span>
                        </div>
                        <div class="form-row">
                              <div class="form-group col-md-12">
                                 <label for="website_info">Website Info</label>
                                 <select id="website_info" v-model="form.website_info" class="form-control" >
                                    <option selected="">Choose</option>
                                    <option value="New" >New</option>
                                    <option value="Rebuilt" >Rebuilt</option>

                                 </select>
                                 <span v-show="danger" v-if="errors.website_info && form.website_info==null" class="text-danger">
                                   {{errors.website_info[0]}}
                                  </span>

                              </div>
                         </div>



                         <div class="form-row">
                              <div class="form-group col-md-12">
                                 <label for="project_status">Project Status</label>
                                 <select id="project_status" v-model="form.project_status" class="form-control" >
                                    <option value="null" >Choose </option>
                                    <option value="1" >1. Fresh</option>
                                    <option value="2" >2. Design Ready & Waiting Approval</option>
                                    <option value="3" >3. Website Launched</option>
                                    <option value="4" >4. Awaited Data</option>
                                  </select>
                                 <span v-show="danger" v-if="errors.project_status && form.project_status==null" class="text-danger">
                                    {{errors.project_status[0]}} </span>

                              </div>
                         </div>

                         <div class="form-group">
                            <label for="test_url">Test Url</label>
                              <input v-model="form.test_url"   type="text" class="form-control"  id="test_url" >
                              <span v-show="danger" v-if="errors.test_url && form.test_url==null" class="text-danger">
                                {{errors.test_url[0]}} </span>
                        </div>

                         <div class="form-group">
                            <label for="admin_panel_url">Admin Panel Url</label>
                              <input v-model="form.admin_panel_url"   type="text" class="form-control"  id="admin_panel_url">
                              <span v-show="danger" v-if="errors.admin_panel_url && form.admin_panel_url==null" class="text-danger">
                                {{errors.admin_panel_url[0]}} </span>
                        </div>


                          <div class="form-group">
                            <label for="user_name">User Name</label>
                              <input v-model="form.user_name"   type="text" class="form-control"  id="user_name">
                              <span v-show="danger" v-if="errors.user_name && form.user_name==null" class="text-danger">
                                {{errors.user_name[0]}} </span>

                          </div>

                          <div class="form-group">
                            <label for="password">Password</label>
                              <input v-model="form.password"   type="text" class="form-control"  id="password">
                              <span v-show="danger" v-if="errors.password && form.password==null" class="text-danger">
                                {{errors.password[0]}} </span>
                          </div>


                         <div class="form-group">
                            <label for="test_url">Hosted By</label>
                              <label class="radio-inline">
                                <input type="radio" v-model="form.hosted_by" value="stealth" checked>Stealth
                              </label>
                              <label class="radio-inline">
                                <input type="radio" v-model="form.hosted_by" value="client">Client
                              </label>
                        </div>

                        <div class="form-group">
                            <label>Hosted On</label>
                              <label class="radio-inline">
                                <input type="radio" v-model="form.hosted_on" checked value="A Record ">A Record
                              </label>
                              <label class="radio-inline">
                                <input type="radio" v-model="form.hosted_on" value="DNS">DNS
                              </label>
                        </div>

                        <div class="form-group">
                            <label>Domain Registrar</label>
                              <label class="radio-inline">
                                <input type="radio" v-model="form.domain_register" value="stealth" checked>Stealth
                              </label>
                              <label class="radio-inline">
                                <input type="radio" v-model="form.domain_register" value="client">Client
                              </label>
                        </div>

                     </div>
                  </div>
<!-- business Detail -->

            </div>
    <!-- end Left Forms -->

               <div class="col-6">
                    <div class="card mb-4">
                     <div class="card-body">
                        <h5 class="card-title">Notes</h5>

                           <div class="form-row">

                                <div class="form-group col-md-12">
                                 <label for="inputunit">Special Request/Notes</label>
                                 <textarea class="form-control" v-model="form.note" id="" cols="30" rows="10"></textarea>


                              </div>
                            </div>
                        </div>
                    </div>
                  <div class="card mb-4">
                     <div class="card-body">
                        <h5 class="card-title">Sale Information</h5>
                        <p></p>
                        <div class="form-row">
                              <div class="form-group col-md-12">
                                 <label for="inputtime">Sale Man</label>
                                 <select id="inputtime" v-model="form.sale_id" class="form-control" >
                                    <option selected="">Choose </option>
                                    <option value="sale.id" v-for="sale in sale_user_data" :key="sale.id">{{sale.first_name}} {{sale.last_name}}</option>

                                  </select>
                                 <span v-show="danger" v-if="errors.sale_id && form.sale_id==null" class="text-danger"> {{errors.sale_id[0]}} </span>

                              </div>
                         </div>
                          <div class="form-row">
                              <div class="form-group col-12">
                                 <label for="start_date">Start Date</label>
                                 <input v-model="form.start_date" type="date" class="form-control"   id="start_date" placeholder="">
                                 <span v-show="danger" v-if="errors.start_date && form.start_date==null" class="text-danger"> {{errors.start_date[0]}} </span>
                              </div>

                           </div>

                           <div class="form-row">
                              <div class="form-group col-12">
                                 <label for="inputbsb">Cost</label>
                                 <input v-model="form.cost" type="text" class="form-control"   id="" placeholder="">
                                 <span v-show="danger" v-if="errors.cost && form.cost==null" class="text-danger"> {{errors.cost[0]}} </span>
                              </div>

                           </div>

                           <div class="form-row">
                              <div class="form-group col-12">
                                 <label for="inputbsb">Tecnology</label>
                                 <input v-model="form.technology" type="text" class="form-control"   id="" placeholder="">
                                 <span v-show="danger" v-if="errors.technology && form.technology==null" class="text-danger"> {{errors.technology[0]}} </span>
                              </div>

                           </div>

                           <div class="form-check">
                              <input class="form-check-input" v-model="form.seo" type="checkbox" value="seo" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                SEO
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" v-model="form.monthly_maintenance" type="checkbox" value="monthly_maintenance" id="flexCheckChecked" checked>
                              <label class="form-check-label" for="flexCheckChecked">
                                Monthly Maintenance
                              </label>
                            </div>



                     </div>
                  </div>
                  <div class="card mb-4">
                     <div class="card-body">
                        <h5 class="card-title">Documents</h5>

                        <div class="form-row">
                          <div class="form-group col-12">
                              <label for="web_scope">Website Scope Of Work</label>
                              <input  type="file"  class="form-control" ref="web_scope"   id="web_scope" @change="web_scope_upload()" placeholder="">
                              <span v-show="danger" v-if="errors.web_scope && form.cost==null" class="text-danger"> {{errors.bsb[0]}} </span>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-12">
                              <label for="service_agreement">Service Agreement</label>
                              <input  type="file" class="form-control" ref="service_agreement"  id="service_agreement" @change="service_agreement_upload()" placeholder="">
                              <span v-show="danger" v-if="errors.cost && form.cost==null" class="text-danger"> {{errors.bsb[0]}} </span>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-12">
                              <label for="seo_scope">SEO Scope Of Work </label>
                              <input  type="file" class="form-control" ref="seo_scope"  id="seo_scope" @change="seo_scope_upload()" placeholder="">
                              <span v-show="danger" v-if="errors.cost && form.cost==null" class="text-danger"> {{errors.bsb[0]}} </span>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-12">
                              <label for="website_training">Website Training File</label>
                              <input  type="file" class="form-control" ref="website_training"  id="website_training"  @change="website_training_upload()" placeholder="">
                              <span v-show="danger" v-if="errors.cost && form.cost==null" class="text-danger"> {{errors.bsb[0]}} </span>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-12">
                              <label for="email_setup">Email Setup File</label>
                              <input  type="file" class="form-control" ref="email_setup" @change="email_setup_upload()" id="email_setup" placeholder="">
                              <span v-show="danger" v-if="errors.cost && form.cost==null" class="text-danger"> {{errors.bsb[0]}} </span>
                          </div>
                        </div>


                    </div>
                  </div>
               </div>
<!-- end right forms -->
               <div class="row">
                    <div class="col-12 mb-5">
                        <a  @click="store" class="btn btn-primary  mt-3 ml-3">Submit</a>
                        <a v-show="formShow"  @click="formShow=false; newFormBtn=true;success=false; danger=false;"  class="btn btn-danger  mt-3 ml-3">Cancel</a>

                    </div>
                </div>

            <!-- {{data}}

            {{errors}} -->

            <br>
            <br>
            <br>
            <!-- {{edit_data}} -->

        </div>
    </transition>

         <div class="col-lg-12 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Projects </h5>


<input type="text" v-model="search">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Project Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr v-for="(row, index) in filteredItems" :key="row.id">
                                        <th scope="row">{{index+1}}</th>
                                        <td>{{row.name}}</td>
                                        <td>{{row.client_email}}</td>
                                        <td>{{row.client_phone}}</td>
                                        <td> {{status_data[row.project_status]}}
                                        </td>
                                        <td>

                                            <a @click="edit(row); danger=false; success=false;" href="#" class="btn btn-sm btn-primary mb-1" >Edit</a>
                                            <a @click="view=row; "  data-toggle="modal" data-target=".bd-example-modal-detail"  class="btn btn-warning btn-sm "> View </a>
                                            <input type="button" @click="destroy(row.id,index); success=false; danger=false;" class="btn btn-sm btn-danger mb-1" data-toggle="modal" data-target="#exampleModalPopovers" value="Delete" />
                                            <!-- <a @click="status(row.id, row.status); success=false; danger=false;" class="btn btn-sm btn-warning mb-1" >Change Status</a> -->
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                    <!-- Modal content-->

                    <div class="modal fade bd-example-modal-detail" tabindex="-1" role="dialog" style="opacity: 1; display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-lg card">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Project Details</h5>
                                            <button type="button" class="close sale_close" data-dismiss="modal" aria-label="Close">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                      <div class="modal-body">

                                        <div class="row">
                                          <div class="col-12">
                                            <table class="table table-bordered">
                                              <tr v-for="(val,key) in this.view" :key="key" >
                                                <td v-if="key!='id'" >{{key.replace('_', ' ')}}</td>
                                                <td v-if="key!='id'">
                                                  <span v-if="key.includes('file')">
                                                    {{ loc }}/{{view.dir_path}}/{{ val }}
                                                    <a :href="loc+'/sm/public/'+view.dir_path+'/'+val" >File Link</a>
                                                    {{key.includes('file')}}
                                                    </span>
                                                  <span v-else> {{val}} </span>
                                                </td>

                                              </tr>
                                            </table>

                                          </div>
                                        </div>
                                    </div>
                                </div>

                                </div>
                      </div>
                    <div v-if="modalpopover">

                    <div id="exampleModalPopovers" class="modal fade show" tabindex="-1" role="dialog"
                                 aria-hidden="true">
                                 <div class="modal-dialog  bg-white" role="document">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalPopoversLabel">Warning</h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">×</span>
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             <h5>Please Confirm!</h5>
                                             <p>{{dynamicBody}}</p>
                                             <hr>
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                             <a @click="onyes = 'yes';" class="btn btn-primary"  data-dismiss="modal">Yes</a>
                                         </div>

                                     </div>
                                 </div>
                             </div>
                           </div>



</div>


</template>
<script>
export default {
    props:['store_route','list_route','del_route','status_route','store_id_route','sale_user'],

    data(){
        return {
          loc:window.location.origin,
          excepts:['id'],
          web_scope:null,
          service_agreement:null,
          seo_scope:null,
          email_setup:null,
          website_training:null,
          view:{},
          status_data:{1:'Fresh',2:'Design Ready & Waiting Approval',3:'Website Launched',
                                    4: 'Awaited Data'},
            search:null,
            test:"hello world",
            formShow:false,
            newFormBtn:true,
            success_message: false,
            danger:false,
            onyes: '',
            modalpopover:false,
            form:{id:null,
                  name :null,
                  client_name :null,
                  client_phone :null,
                  client_email :null,
                  client_address :null,
                  website_url :null,
                  drive_link :null,
                  website_info :null,
                  project_status :null,
                  test_url :null,
                  admin_panel_url :null,
                  user_name :null,
                  password :null,
                  hosted_by :null,
                  hosted_on :null,
                  domain_register :null,
                  note :null,
                  start_date :null,
                  cost :null,
                  technology :null,
  },
        project_data:{},
        errors:{},
        edit_data:{},
        successful: {},
        store_staff_id:{},
        sale_user_data:{},

        // </option>
        //                             <option value="2" >2. Design Ready & Waiting Approval</option>
        //                             <option value="3" >3. Website Launched</option>
        //                             <option value="4" >4. Awaited Data<
        }
    },
    created(){

       this.list();
        //this.storeStaffId();
        this.sale_users();
    },
    methods:{
      web_scope_upload(){
          console.log( this.$refs.web_scope.files[0]);
          this.web_scope = this.$refs.web_scope.files[0];
      },
      service_agreement_upload(){
        this.service_agreement = this.$refs.service_agreement.files[0];
      },
      email_setup_upload(){

          this.email_setup =  this.$refs.email_setup.files[0];
      },

      website_training_upload(){
                  this.website_training = this.$refs.website_training.files[0];

      },
      seo_scope_upload(){
           this.seo_scope = this.$refs.seo_scope.files[0];
      },
      sale_users(){
        axios.get(this.sale_user).then(res=>{
          this.sale_user_data = res.data;
        });
      },

        storeStaffId(){
          axios.get(this.store_id_route).then(response=>{
            this.store_staff_id = response.data;
            console.log(this.store_staff_id);
          });
        },

        newForm(){
            this.formShow = true;
            this.newFormBtn = false;
            this.clear();
        },

        clear(){
         this.form = {id:null,name :null,client_name :null, client_phone :null,client_email :null,
client_address :null,
website_url :null,
drive_link :null,
website_info :null,
project_status :null,
test_url :null,
admin_panel_url :null,
user_name :null,
password :null,
hosted_by :null,
hosted_on :null,
domain_register :null,
note :null,
start_date :null,
cost :null,
technology :null,
  };
        },

        edit(row){
            this.formShow = true;
            this.newFormBtn = false;
           this.form = this.edit_data = row;
        },

        list(){

            axios.get(this.list_route).then(response=>{
                this.project_data = response.data;
                console.log(this.project_data);
            });
        },

        store(){

         console.log(this.form);
            let formData = new FormData();
            formData.append('webscope_file',this.web_scope);
            formData.append('service_agreement_file',this.service_agreement);
            formData.append('seo_scope_file',this.seo_scope);
            formData.append('website_training_file',this.website_training);
            formData.append('email_setup_file',this.email_setup);
            if(this.form.id){
              formData.append('id',this.form.id);

            }
            formData.append('name',this.form.name);
            formData.append('client_name',this.form.client_name);
            formData.append('client_phone',this.form.client_phone);
            formData.append('client_email',this.form.client_email);
            formData.append('client_address',this.form.client_address);
            formData.append('website_url',this.form.website_url);
            formData.append('drive_link',this.form.drive_link);
            formData.append('website_info',this.form.website_info);
            formData.append('project_status',this.form.project_status);
            formData.append('test_url',this.form.test_url);
            formData.append('admin_panel_url',this.form.admin_panel_url);
            formData.append('user_name',this.form.user_name);
            formData.append('password',this.form.password);
            formData.append('hosted_by',this.form.hosted_by);
            formData.append('hosted_on',this.form.hosted_on);
            formData.append('domain_register',this.form.domain_register);
            formData.append('note',this.form.note);
            formData.append('start_date',this.form.start_date);
            formData.append('cost',this.form.cost);
            formData.append('technology',this.form.technology);


            axios.post(this.store_route,formData,{
                                                headers: {
                                                    'Content-Type': 'multipart/form-data'
                                                }
                      }).then(response=>{
                // console.log(response.data);
                this.list();
                this.formShow = false;
                this.newFormBtn = true;
              //  this.clear();
                this.success = true;
                this.danger = false;
                this.message(response);
                window.scrollTo(0, 0);
            }).catch(error=>{
              console.log("ERRRR:: ",error.response.data);

                    this.errors = error.response.data.errors;
                    this.danger = true;
                    window.scrollTo(0, 0);
            });
            // console.log(this.form);  err.response.data.errors;
        },

        destroy(id,index){


                var result = confirm("This Store is active. Do you really want to Delete?");
                if(result){
                  axios.get(this.del_route+'/'+id).then(response=>{
                    this.list()
                    this.success = true;
                    this.danger = false;
                   this.message(response);

                    window.scrollTo(0, 0);

                  });
                }



        },
        status(id,status){
            axios.get(this.status_route+'/'+id+'/'+status).then(this.list());
        },
         message(res){
            this.list();
            if(res.data.error){
                    this.error_message = res.data.error;
            }
            if(res.data.success){
                    this.success_message = res.data.success;
            }
            setTimeout(()=>{this.success_message = null;}, 2000);
        },


    },
    computed: {
    filteredItems() {
      return this.project_data.filter(item => {
        if(this.search){
          return item.name.toLowerCase().includes(this.search.toLowerCase());
         }else{
           return true;
         }
      });
    }
  }


}

</script>

<style>

.table td {
   text-align: center;
}

.bounce-enter-active {
  animation: bounce-in .5s;
}
.bounce-leave-active {
  animation: bounce-in .5s reverse;
}
@keyframes bounce-in {
  0% {
    transform: scale(0);
  }
  50% {
    transform: scale(1.5);
  }
  100% {
    transform: scale(1);
  }
}
</style>
