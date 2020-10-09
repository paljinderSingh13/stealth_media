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
              <h1 class="hding-pos">Role Details</h1>
              <div class="separator mb-5"></div>
           </div>
        </div>
    <div class="row">
                <div class="col-12 mb-5">
                    <a  @click="newForm();danger=false; success=false; errorname=false;" v-show="newFormBtn"  class="btn btn-primary text-white  mt-3 ml-3">New Role</a>
                </div>
        </div>
  <transition name="bounce">
    <div class="row" v-show="formShow">
    <!-- <div class="alert alert-success" v-show:"success">Role Created Successfully</div> -->
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-12 position-relative error-l-50">
                        <label for="inputname">Name</label>
                        <input type="text" class="form-control" id="name" name="name" v-model="form.name" placeholder="Enter name" >

                    </div>
                  </div>

                    <div class="form-group">
                      <label >Detail</label>
                      <input type="text" class="form-control" id="detail" name="detail" v-model="form.detail" placeholder="details" >

                    </div>
              </div>
            </div>
          </div>

          <div class="row">
               <div class="col-12 mb-5">
                 <button type="submit" @click="store(); errorname=true;" class="btn btn-primary text-white  mt-3 ml-3">Submit</button>
                 <button v-show="formShow"  @click="formShow=false; newFormBtn=true; danger=false; success=false;"  class="btn btn-danger text-white mt-3 ml-3">Cancel</button>
               </div>
             </div>
          </div>
    </transition>

<div class="col-lg-12 col-md-12 mb-4">
           <div class="card">
               <div class="card-body">
                   <h5 class="card-title">Role</h5>

                   <table class="table table-striped">
                       <thead>
                           <tr>
                               <th scope="col">S.No</th>
                               <th scope="col">Name</th>
                               <th scope="col">Detail</th>
                               <th scope="col">Status</th>
                               <th scope="col">Action</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr v-for="(row, index) in data">
                               <th scope="row">{{index+1}}</th>
                               <td>{{row.name}}</td>
                               <td>{{row.detail}}</td>
                               <td>
                                 <h6>
                                   <span v-if="row.status==1" class="badge badge-success"> Active </span>
                                   <span v-else-if="row.status==0" class="badge badge-danger">In Active</span>
                                </h6>
                              </td>
                               <td>
                                   <a @click="edit(row); danger=false; success=false;" class="btn btn-sm btn-primary text-white mb-1" >Edit</a>

                                   <a @click="destroy(row.id); danger=false;" class="btn btn-sm btn-danger mb-1 text-white">Delete</a>

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
    export default{
      props: ['list_route', 'store_route', 'del_route', 'status_route', 'role_type_route'],
      data(){
        return{
          formShow:false,
          newFormBtn:true,
          success:false,
          danger:false,
          form:{
            name: null,
            detail: null,
            // created_by: null
            // success:false
          },
          data:{},
          edit_data:{},
          errors:{},
          successful:{},
          role_type:{},
        }
      },
      created(){
          this.list();
          this.roleType();
      },
      methods: {

        roleType(){
          axios.get(this.role_type_route).then(response=>{
            this.role_type = response.data;
            console.log(this.role_type);
          });
        },


        newForm(){
            this.formShow = true;
            this.newFormBtn = false;
            this.clear();
        },

        clear(){
                this.form = {id:null, name:null,email:null,detail:null},this.danger=false;
        },

        list(){

            axios.get(this.list_route).then(response=>{
                this.data = response.data;
                // console.log(this.data[1].status);
            });
        },
        store(){
          axios.post(this.store_route,this.form).then(response=>{
            console.log(response.data.success);
            // var created_by = document.getElementById("created_by");
            this.list();
            this.formShow = false;
            this.newFormBtn = true;
            this.success = true;
            this.clear();
            this.successful = response.data.success;
            window.scrollTo(0, 0);

            // this.success = true;
          }).catch(error=>{
            console.log("ERRRR:: ",error.response.data);
            this.errors = error.response.data.errors;
            this.danger = true;
            window.scrollTo(0, 0);

          });
        },
        edit(row){
          this.formShow = true;

          this.form = this.edit_data = row;
          this.newFormBtn = false;
          window.scrollTo(0, 0);
        },
        destroy(id){
          for(var item in this.role_type)
          console.log(this.data[item]);
            {

              if(this.data[item].status == 1){

                var result = confirm("This Store is active. Do you really want to Delete?");
                if (result) {
                  if(id == this.role_type[item]){
                    return confirm("This store is affiliated to present staff. You cannot delete this store");

                  }
                  // axios.get(this.del_route+'/'+id).then(response=>{this.list()});

              }else{
                return confirm("Store not deleted");
              }
          }
        }
            axios.get(this.del_route+'/'+id).then(response=>{
              console.log(response.data);
              this.list();
              this.success = true;
              this.successful = response.data.success;
              window.scrollTo(0, 0);
            });
        },
        status(id,status){
          axios.get(this.status_route+'/'+id+'/'+status).then(response=>{
            console.log(response.data);
            this.list();
          });
        }
      }

    }
</script>
