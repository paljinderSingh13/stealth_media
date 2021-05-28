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
                    <h1 class="hding-pos">Availability</h1>
                    <div class="separator mb-5"></div>
                 </div>
              </div>

        <div class="row">
                 <div class="col-12">
                    <h5 class="card-title mt-4">Name of month</h5>
                 </div>
              </div>
        <div class="row">
          <div class="col-8 offset-md-2">
            <div class="card">
                          <div class="card-body table-receive">
                <table class="table">
                                  <thead>
                                      <tr>
                                          <th scope="col">Date </th>
                                          <th scope="col">Available</th>
                                          <th scope="col">Shift In &nbsp; Shift Out</th>
                    </tr>
                                  </thead>
                                  <tbody>

                     <tr v-for="(n,index) in daysInMonth" >
                        <th scope="row">
                          <span name="date">{{form.date[n] = n+'-'+monthYear}}</span>
                        </th>
                        <td>
                          <div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                              <input @click="deleteAvail(n)" name="available" v-model="form.available" v-bind:value="n" class="custom-switch-input" v-bind:id="n" type="checkbox">
                              <label class="custom-switch-btn" v-bind:for="n"></label>
                          </div>
                        </td>
                        <td>
                        <div class="form-group mb-1">
                          <select v-bind:id="'start'+index" v-model="form.shift_start[n]" name="shift_start" >
                              <option disabled selected value>Shift In</option>
                              <option v-for="(time_value,index) in 12" v-bind:value="time_value">{{time_value}} AM</option>
                          </select>

                           <select v-bind:id="'end'+index" name="shift_end" v-model="form.shift_end[n]">
                                <option selected="" disabled>Shift Out</option>
                                <option v-for="(time_value,index) in 12" v-bind:value="time_value">{{time_value}} PM</option>

                            </select>
                        </div>
                    </td>
                    </tr>
                                  </tbody>
                              </table>

                          </div>
              <div class="separator mb-5"></div>
              <div class="col-12 text-center mb-3">
                <button type="submit" @click="store()" class="btn btn-primary">Submit</button>
              </div>
                      </div>
          </div>
        </div>


  </div>

</template>

<script>
import moment from 'moment';
export default {
  props: ['store_route','staff_avail_route','del_route'],
  data(){
    return{
        checkShift: [],
        checkAvailable: [],
        success:false,
        danger:false,
        form:{
          available: [],
          shift_start: [],
          shift_end: [],
          date: [],
          month:[],
          year: []
        },
        data:"",
        old_data:"",
        getMonth: "",
        getYear: "",
        dates: "",
        daysInMonth:null,
        monthYear:null,
        yearMonth:null,
        successful: null,
        errors: null,
    }
  },
  created() {
                this.availData();
                this.getDate();
            },
  methods:
  {
    availData(){
      axios.get(this.staff_avail_route).then(response=>{

          if(response.data){
          this.old_data = response.data;
          for(var item in this.old_data )
          {

              this.form.available.push(parseInt(item));
              this.form.shift_start[item] = this.old_data[item]['shift_start'];
              this.form.shift_end[item] = this.old_data[item]['shift_end'];

          }
          console.log(response.data);
          // this.deleteAvail();

      }

      });
    },
    deleteAvail(id){
        if($(document.getElementById(id)).is(':checked') == false){
         axios.post(this.del_route+'/'+id).then(response=>{
           console.log(response.data);
           this.success = true;
           this.successful = response.data.success;
           window.scrollTo(0, 0);
         });
    }
  },
    getDate(){
      var month = moment().add(1,'months');
      this.monthYear = month.format("MMM-YYYY");
      this.yearMonth = month.format("YYYY-MM");
      this.daysInMonth = month.daysInMonth();
    },

    store(){

      axios.post(this.store_route,this.form).then(response=>{
        console.log(this.form.available);
        this.success = true;
        console.log(response.data.success);
        this.successful = response.data.success;
        window.scrollTo(0, 0);
        this.data = response.data;
      }).catch(error=>{
              console.log("ERRRR:: ",error.response.data);
              this.errors = error.response.data.errors;
              this.danger = true;
              window.scrollTo(0, 0);

      });
    }
  }
}
</script>

<style lang="css" scoped>
</style>
