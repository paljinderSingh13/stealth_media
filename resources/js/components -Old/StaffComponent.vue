<template>
  <div>
    <div class="alert alert-danger" v-show="danger">
      <ul>
        <li v-for="error in errors">
          {{error[0]}}

        </li>

      </ul>
    </div>

        <div class="alert alert-success" style="margin-top:10px" v-show="success">
          {{successful}}
        </div>
      <div class="row">
         <div class="col-12">
            <h1 class="hding-pos">Staff Registration</h1>
            <div class="separator mb-5"></div>
         </div>
      </div>

      <div class="row">
            <div class="col-12 mb-5">
                <a  @click="newForm();danger=false; success=false;" v-show="newFormBtn"  class="btn btn-primary text-white  mt-3 ml-3">New Staff</a>
            </div>
      </div>
      <transition name="bounce">
			<div class="row" v-show="formShow">
               <div class="col-8 offset-2">
					<div class="card mb-4">
                        <div class="card-body">
                            <!-- <form> -->
                                <div class="form-row">
									<div class="col-md-3">
										<div class="user-store text-center mt-4">
										  <i class="fa fa-user fa-5x" aria-hidden="true"></i>
										</div>
									</div>
                                    <div class="col-md-9">
                                        <div class="form-group col-md-12">
                      											<label for="inputname">User Name</label>
                      											<input type="text" class="form-control" name="user_name" v-model="form.user_name" id="inputEname" placeholder="Name">

                                          </div>


										<div class="form-row mx-2">
										<div class="form-group col-md-6">
											<label for="inputname">First Name</label>
											<input type="text" class="form-control" name="first_name" id="inputFname" v-model="form.first_name" placeholder="Name">
										</div>
										<div class="form-group col-md-6">
											<label for="inputname">Last Name</label>
											<input type="text" class="form-control" name="last_name" v-model="form.last_name" id="inputLname" placeholder="Name">
										</div>
										</div>
                                    </div>

                                </div>

                                <div class="form-row">
                                   <div class="form-group col-md-4">
                                        <label for="inputState">Gender</label>
                                        <select name="gender" v-model="form.gender" id="inputGender" class="form-control">
                                            <option selected="">Choose Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                   <div class="form-group col-md-4">
                                        <label for="inputState">User Type</label>

                                        <select name="user_type" v-model="form.user_type" id="inputType" class="form-control">
                                            <option selected="" disabled>Choose User Type</option>
                                            <option :value="key" v-for="(val,key) in  role_drop_down">
                                                {{val}}
                                            </option>

                                            <!-- <input type="text" class="form-control" name="user_type" v-model="form.user_type" id="inputType" value=""> -->

                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                                          <label for="inputState">Store Affiliations</label>
                                                          <select name="store_affiliation" v-model="form.store_affiliation" id="inputStore" class="form-control">
                                                              <option selected="" disabled>Choose Store</option>
                                                              <option :value="key" v-for="(val,key) in store_drop_down">{{val}}</option>
                                                          </select>
                                                      </div>
                                </div>
								<div class="form-row">
                                    <div class="form-group col-md-6">
                                         <label for="inputZip">Contact</label>
                                        <input name="contact" v-model="form.contact" type="text" class="form-control" id="inputZip">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputZip">Alternate</label>
                                        <input name="alternate" v-model="form.alternate" type="text" class="form-control" id="inputAzip">
                                    </div>

                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                                      <label for="inputState">Email Address</label>
                                                       <input name="email" v-model="form.email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                  </div>
                                <div class="form-group col-md-6">
                                  <label for="inputpass">Password</label>
                                  <input type="password" class="form-control" name="password" v-model="form.password" id="inputPass" placeholder="Password">
                                </div>
                              </div>
                                <!-- <div class="row">
									<div class="col-12" v-show="primarystore">
                      <ul class="m-0 pl-2">
                        <li :id='id' v-for="(name,id) in store_drop_down">{{name}}</li>

                      </ul>


                      <a class="btn btn-sm btn-outline-success mb-1 ml-8 font-weight-bold float-right" @click="primaryStore(store_drop_down.id,store_drop_down.name)">Change Primary Store</a>
									</div>
								</div> -->
                                <button type="submit" @click="save()" class="btn btn-primary  mt-3">Submit</button>
                                <button type="submit" @click="formShow=false; newFormBtn=true; danger=false; success=false;" class="btn btn-light  mt-3">Close</button>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
          </transition>
          <div class="col-lg-12 col-md-12 mb-4">
                     <div class="card">
                         <div class="card-body">
                             <h5 class="card-title">Staff</h5>

                             <table class="table table-striped">
                                 <thead>
                                     <tr>
                                         <th scope="col">S.No</th>
                                         <th scope="col">Username</th>
                                         <th scope="col">Gender</th>
                                         <th scope="col">Type</th>
                                         <th scope="col">Email Address</th>
                                         <th scope="col">Contact</th>
                                         <th scope="col">Store</th>
                                         <th scope="col">Status</th>
                                         <th scope="col">Action</th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr v-for="(row, index) in data">
                                         <th scope="row">{{index+1}}</th>
                                         <td>{{row.user_name}}</td>
                                         <td>{{row.gender}}</td>
                                         <td v-if="row.role">{{row.role.name}}</td>
                                         <td>{{row.email}}</td>
                                         <td>{{row.contact}}</td>
                                         <td v-if="row.store">{{row.store.name}}</td>
                                         <td><h6>
                                           <span v-if="row.status==1" class="badge badge-success"> Active </span>
                                           <span v-else-if="row.status==0" class="badge badge-danger">In Active</span>
                                        </h6> </td>

                                         <td>
                                             <a @click="edit(row); danger=false; success=false;" href="#" class="btn btn-sm btn-primary text-white mb-1">Edit</a>
                                             <a @click="destroy(row.id); danger=false; success=false;" class="btn btn-sm btn-danger mb-1 text-white">Delete</a>
                                             <a @click="status(row.id,row.status); danger=false; success=false;" class="btn btn-sm btn-warning mb-1 ml-8 text-black">Change Status</a>

                                        </td>
                                     </tr>

                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
               </div>

</template>

<script>
export default {
  props:['list_route', 'save_route', 'del_route', 'pstore_route','role_route', 'store_route', 'status_route'],
  data(){
    return{

        formShow:false,
        newFormBtn:true,
        success:false,
        danger:false,
        // malvern:true,
        // bruns:true,
        // genesis:true,
        form:{
          user_name: null,
          password: null,
          first_name: null,
          last_name: null,
          gender: null,
          user_type: null,
          email: null,
          contact: null,
          alternate: null,
          store_affiliation: null
        },
        data:{},
        edit_data:{},
        errors:{},
        successful:{},
        role_drop_down:{},
        store_drop_down:{},
    }
  },
  created(){
    this.list();
    this.roleDropDown();
    this.storeDropDown();
  },
  methods: {

    newForm(){
        this.formShow = true;
        this.newFormBtn = false;
        this.clear();
    },

    roleDropDown(){
      axios.get(this.role_route).then(response=>{
        this.role_drop_down = response.data;
      });
    },

    storeDropDown(){
      axios.get(this.store_route).then(response=>{
        this.store_drop_down = response.data;
        console.log(this.store_drop_down);
      });
    },
    clear(){
      this.form = {id:null, first_name:null,last_name:null,user_name:null,email:null,contact:null,alertnate:null,password:null,gender:null,user_type:null,store_affiliation:null},this.danger=false;
    },
    list(){
      axios.get(this.list_route).then(response=>{
        // console.log(response.data);
        this.data = response.data;

      });
    },
    save(){
      axios.post(this.save_route,this.form).then(response=>{
          console.log(response.data[0].store_affiliation);
          this.list();
          this.successful = response.data.success;
          console.log(response.data.success);
          this.formShow = false;
          this.newFormBtn = true;
          this.success = true;
          window.scrollTo(0, 0);
          this.clear();
      }).catch(error=>{
              console.log("ERRRR:: ",error.response.data);
              this.errors = error.response.data.errors;
              this.danger = true;
              window.scrollTo(0, 0);

      });
    },
    edit(row){
      this.form = this.edit_data = row;
      this.formShow = true;
      this.newFormBtn = false;
      // this.toggleStore();
      window.scrollTo(0, 0);
    },
    destroy(id){
       var result = confirm("Want to delete?");
       if (result) {
        axios.get(this.del_route+'/'+id).then(response=>{
          console.log(response.data);
          this.list();
          this.success = true;
          this.successful = response.data.success;
          window.scrollTo(0, 0);

        });
        }
    },
    status(id,status){
      axios.get(this.status_route+'/'+id+'/'+status).then(response=>{
        console.log(response.data);
        this.list();
      });
    },
    //
    // primaryStore(id,store_affiliation){
    //   axios.get(this.pstore_route+'/'+id+'/'+store_affiliation).then(response=>{
    //     console.log(response.data);
    //     this.edit_data.store_affiliation = response.data;
    //     this.toggleStore();
    //   });
    // },
    // toggleStore(){
    //   if(this.edit_data.store_affiliation == "Malvern Phone"){
    //     if(!document.getElementById("l1").innerHTML.includes('Primary Store')){
    //     document.getElementById("l1").innerHTML += " &nbsp; <b class='badge badge-success'>Primary Store</b>";}
    //     document.getElementById("l2").innerHTML = "Brunswick";
    //     document.getElementById("l3").innerHTML = "Genesis Virtual Store";
    //
    //   }else if(this.edit_data.store_affiliation == "Brunswick"){
    //     if(!document.getElementById("l2").innerHTML.includes('Primary Store')){
    //     document.getElementById("l2").innerHTML += " &nbsp; <b class='badge badge-success'>Primary Store</b>";}
    //     document.getElementById("l1").innerHTML = "Malvern Phone";
    //     document.getElementById("l3").innerHTML = "Genesis Virtual Store";
    //
    //   }else if(this.edit_data.store_affiliation == "Genesis Virtual Store"){
    //     if(!document.getElementById("l3").innerHTML.includes('Primary Store')){
    //     document.getElementById("l3").innerHTML += " &nbsp; <b class='badge badge-success'>Primary Store</b>";}
    //     document.getElementById("l1").innerHTML = "Malvern Phone";
    //     document.getElementById("l2").innerHTML = "Brunswick";
    //   }
    // }
  }
}

</script>
