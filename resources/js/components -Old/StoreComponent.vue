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
                    <div class="col-12 mb-5">
                        <a  @click="newForm(); success=false;danger=false" v-show="newFormBtn"  class="btn btn-primary  mt-3 ml-3">New Store</a>
                        <a v-show="formShow"  @click="formShow=false; newFormBtn=true;success=false; danger=false;"  class="btn btn-danger  mt-3 ml-3">Cancel</a>
                    </div>
            </div>
<transition name="bounce">


        <div class="row" v-show="formShow">
<!-- left           -->

            <div class="col-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"> Store Details</h5>
                        <div class="form-row">
                            <div class="form-group col-md-12 position-relative error-l-50">
                                <input v-model="form.id" type="hidden"  class="form-control">
                                <label for="inputname">Name</label>
                                <input v-model="form.name" type="text"   class="form-control"  id="inputEname" placeholder="">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcontact">Contact Number</label>
                              <input v-model="form.contact_number"   type="text" class="form-control"  id="contact_number" placeholder="">

                        </div>

                        <div class="form-group">
                            <label for="inputcontact">Alternate Contact Number</label>
                            <input v-model="form.alertnate_contact_number"   type="text" class="form-control"  id="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="inputcontact">Email</label>
                            <input type="email"  v-model="form.email" class="form-control"  id="" placeholder="">
                        </div>
                    </div>
                </div>
<!-- Time zone -->
                <div class="card mb-4">
                     <div class="card-body">
                        <h5 class="card-title">Store Timezone</h5>
                        <div class="form-row">
                              <div class="form-group col-md-12">
                                 <label for="inputtime">Timezone</label>
                                 <select id="inputtime" v-model="form.timezone" class="form-control" >
                                    <option selected="">Choose Timezone</option>
                                    <option value="AWST" >AWST Australian Western Standard Time</option>
                                    <option value="ACWST" >ACWST Australian Central Western Standard Time </option>
                                    <option value="ACST" >ACST Australian Central Standard Time</option>
                                    <option value="AEST" >AEST Australian Eastern Standard Time</option>
                                    <option value="LHST" >LHST Lord Howe Standard Time</option>
                                 </select>
                              </div>
                           </div>

                     </div>
                  </div>
<!-- business Detail -->
                  <div class="card mb-4">
                     <div class="card-body">
                        <h5 class="card-title">Business Details</h5>

                           <div class="form-row">
                              <div class="form-group col-12">
                                 <label for="inputbusinessnumber">Business Number</label>
                                 <input type="text" v-model="form.business_number"  class="form-control"  id="" placeholder="">
                              </div>


                              <div class="form-group col-12">
                                 <label for="inputbusinessname">Business Name</label>
                                 <input type="text" v-model="form.business_name" class="form-control"  id="" placeholder="">
                              </div>
                           </div>

                     </div>
                  </div>
            </div>
    <!-- end Left Forms -->

               <div class="col-6">
                  <div class="card mb-4">
                     <div class="card-body">
                        <h5 class="card-title">Store Address</h5>

                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputunit">Unit Number</label>
                                 <input type="text" class="form-control" v-model="form.unit_number"  id="" placeholder="">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputstreetnumber">Street Number</label>
                                 <input type="text" class="form-control" v-model="form.street_number" id="" placeholder="">
                              </div>
                           </div>


                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputstreet">Street Name</label>
                                 <input type="text" class="form-control" v-model="form.street_name" id="" placeholder="">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputpostcode">postcode</label>
                                 <input type="text" v-model="form.post_code" class="form-control"  id="" placeholder="">
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputsubrub">Subrub Name</label>
                                 <input type="text" class="form-control" v-model="form.suburb_name"  id="" placeholder="">
                              </div>

                              <div class="form-group col-md-6">
                                 <label for="inputstate">State</label>
                                <select v-model="form.state" id="inputstate" class="form-control" >
                                    <option selected="">Choose...</option>
                                    <option>Sydeny</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-12">
                                 <label for="inputcountry">Country</label>
                                 <select v-model="form.country" id="inputcountry" class="form-control" >
                                    <option selected="">Australia</option>
                                    <option>...</option>
                                 </select>
                              </div>
                           </div>

                     </div>
                  </div>
                  <div class="card mb-4">
                     <div class="card-body">
                        <h5 class="card-title">Bank Information</h5>
                        <p></p>

                           <div class="form-row">
                              <div class="form-group col-12">
                                 <label for="inputbsb">BSB</label>
                                 <input v-model="form.bsb" type="text" class="form-control"   id="" placeholder="">
                              </div>
                              <div class="form-group col-12">
                                 <label for="inputbankaccountnumber">Bank Account Number</label>
                                 <input v-model="form.bank_account_number" type="text" class="form-control"  id="" placeholder="">
                              </div>
                              <div class="form-group col-12">
                                 <label for="inputbankaccountname">Bank Account Name</label>
                                 <input type="text" v-model="form.bank_account_name" class="form-control"  id="" placeholder="">
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
                            <h5 class="card-title">Store's</h5>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr v-for="(row, index) in data">
                                        <th scope="row">{{index+1}}</th>
                                        <td>{{row.name}}</td>
                                        <td>{{row.email}}</td>
                                        <td>{{row.contact_number}}</td>
                                        <td> <h6>
                                                <span v-if="row.status==1" class="badge badge-success"> Active </span>
                                                <span v-else-if="row.status==0" class="badge badge-danger">In Active</span>
                                            </h6>
                                        </td>
                                        <td>
                                            <a @click="edit(row); danger=false; success=false;" href="#" class="btn btn-sm btn-primary mb-1" >Edit</a>
                                            <a @click="destroy(row.id); success=false; danger=false;" class="btn btn-sm btn-danger mb-1">Delete</a>
                                            <a @click="status(row.id, row.status); success=false; danger=false;" class="btn btn-sm btn-warning mb-1" >Change Status</a>
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
    props:['store_route','list_route','del_route','status_route','store_id_route'],

    data(){
        return {
            test:"hello world",
            formShow:false,
            newFormBtn:true,
            success: false,
            danger:false,
            form:{
             id:null,
             name:null,
             email:null,
             contact_number:null,
             alertnate_contact_number:null,
             unit_number:null,
             street_number:null,
             street_name:null,
             post_code:null,
             suburb_name:null,
             state:null,
             country:null,
             timezone:null,
             bsb:null,
             bank_account_number:null,
             bank_account_name:null,
             business_number:null,
             business_name:null
        },
        data:{},
        errors:{},
        edit_data:{},
        successful: {},
        store_staff_id:{},
        }
    },
    created(){
        this.list();
        this.storeStaffId();
    },
    methods:{

        storeStaffId(){
          axios.get(this.store_id_route).then(response=>{
            this.store_staff_id = response.data;
            // console.log(this.store_staff_id);
          });
        },

        newForm(){
            this.formShow = true;
            this.newFormBtn = false;
            this.clear();
        },

        clear(){
                this.form = {id:null, name:null,email:null,contact_number:null,alertnate_contact_number:null,unit_number:null,street_number:null,street_name:null,post_code:null,suburb_name:null,state:null,country:null,timezone:null,bsb:null,bank_account_number:null,bank_account_name:null,business_number:null, business_name:null}
        },

        edit(row){
            this.formShow = true;
           this.form = this.edit_data = row;
        },

        list(){

            axios.get(this.list_route).then(response=>{
                this.data = response.data;
                console.log(this.data);

            });
        },

        store(){

            axios.post(this.store_route,this.form).then(response=>{
                // console.log(response.data);
                this.list();
                this.formShow = false;
                this.newFormBtn = true;
                this.clear();
                this.success = true;
                this.successful = response.data.success;
                window.scrollTo(0, 0);
            }).catch(error=>{
              console.log("ERRRR:: ",error.response.data);

                    this.errors = error.response.data.errors;
                    this.danger = true;
                    window.scrollTo(0, 0);
            });
            // console.log(this.form);  err.response.data.errors;
        },
        destroy(id){
          for(var item in this.store_staff_id )
          console.log(this.data[this.store_staff_id[item]]);

            {

              if(this.data[item].status == 1){
                var result = confirm("This Store is active. Do you really want to Delete?");
                if (result) {
                  if(id == this.store_staff_id[item]){
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
              this.list()
              this.success = true;
              this.successful = response.data.success;
              window.scrollTo(0, 0);

            });


        },
        status(id,status){
            axios.get(this.status_route+'/'+id+'/'+status).then(this.list());
        }


    }


}

</script>

<style type="text/css">

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
