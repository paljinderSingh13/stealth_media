<template>
  <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <h1 class="hding-pos">Roster Management</h1>
                  <div class="separator mb-5"></div>
               </div>
            </div>
			<div class="row">
                {{current}}
                {{form}}
                {{store_staff_data}}
                
              
				<div class="col-lg-4 col-sm-12">
					<label>Select Store</label>
					<select  id="store_dropD" @change="store_staff()"   v-model="form.store_id"  class="form-control " data-width="100%">
						<option >Store</option>

							<option  v-for="(name,id) in store_data" :value="id">{{name}}</option>
							
						


					</select>
				</div>
				<div class="col-lg-4 col-sm-12">
					<label>Select Month-Year</label>
					<select  v-model="form.month_year" class="form-control" data-width="100%">
						<option label="&nbsp;">Month-Year</option>
							<option  v-for="(readble, val) in monthYearData" :value="val">{{readble}}</option>
					
					</select>
				</div>
				<div v-if="store_staff_data.length > 0" class="col-lg-4 col-sm-12">
					<label>Select Staff For Store</label>
					<select v-model="form.staffs" class="form-control" multiple="multiple" data-width="100%">
                           <option v-for="staff in store_staff_data" :value="staff.id">  {{staff.first_name}} {{staff.last_name}}  </option>
                          
                           
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-12 mt-5">
					<div class="card">
                        <div class="card-body table-receive">
							<table class="table table-responsive table-bordered text-center">
                               
                                    <tr>
                                        <th scope="row">Date</th>
                                       
                                        <th colspan="4" v-for="row in store_staff_data" :key="row.id">{{row.first_name}} {{row.last_name}}</th>
                                       
                                        <th>Total Stafs</th>
                                        <th>Total Hours</th>

                                    </tr>
									<tr>
                                     
                                        <th scope="row"></th>
										<td>Availabilty Toggle</td>
										<td>Availabilty Hours</td>
										<td>Shift Toggle</td>
										<td>Shift Hours</td>
										<td>Availabilty Toggle</td>
										<td>Availabilty Hours</td>
										<td>Shift Toggle</td>
										<td>Shift Hours</td>
										<td>Availabilty Toggle</td>
										<td>Availabilty Hours</td>
										<td>Shift Toggle</td>
										<td>Shift Hours</td>
										<td></td>
										<td></td>
                                     
									</tr>
                                <tbody v-for="n in daysInMonth">    
									<tr >
                                        <th scope="row">{{n}}-{{monthYear}}</th>

										<th v-for="row in store_staff_data"> 
                                            <span v-if="
                                            [yearMonth+'-'+n]">
                                                 <p v-if="availbility[yearMonth+'-'+n][row.id]" >
                                                    yes
                                                </p>
                                                <p v-else>
                                                    No
                                                </p>
                                            </span>    
                                            <span v-else>No</span>  
                                        </th>
										<td><span class="time-in">9 AM</span> &nbsp; <span class="time-in">5 PM</span></td>
										<td>
											<div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchS" type="checkbox">
                                                <label class="custom-switch-btn" for="switchS"></label>
                                            </div>
										</td>
										<td>
										<div class="form-group mb-1">
                                        <select class="rating" data-readonly="true">
                                            <option value="1">1 AM</option>
                                            <option value="2">2 AM</option>
                                            <option value="3">3 AM</option>
                                            <option value="4">4 AM</option>
                                            <option value="5">5 AM</option>
                                            <option value="5">6 AM</option>
                                            <option value="5">7 AM</option>
                                            <option value="5">8 AM</option>
                                            <option value="5">9 AM</option>
                                            <option value="5">10 AM</option>
                                            <option value="5">11 AM</option>
                                            <option value="5">12 AM</option>

                                        </select>
										&nbsp;&nbsp;
										&nbsp;&nbsp;
										<select class="rating"  data-readonly="true">
                                            <option value="1">1 PM</option>
                                            <option value="2">2 PM</option>
                                            <option value="3">3 PM</option>
                                            <option value="4">4 PM</option>
                                            <option value="5">5 PM</option>
                                            <option value="5">6 PM</option>
                                            <option value="5">7 PM</option>
                                            <option value="5">8 PM</option>
                                            <option value="5">9 PM</option>
                                            <option value="5">10 PM</option>
                                            <option value="5">11 PM</option>
                                            <option value="5">12 PM</option>

                                        </select>
                                        </div>
										</td>
										<th>Yes</th>
										<td><span class="time-in">9 AM</span> &nbsp; <span class="time-in">5 PM</span></td>
										<td>
											<div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchone" type="checkbox">
                                                <label class="custom-switch-btn" for="switchone"></label>
                                            </div>
										</td>
										<td>
											<div class="form-group mb-1">
                                        <select class="rating" data-readonly="true">
                                            <option value="1">1 AM</option>
                                            <option value="2">2 AM</option>
                                            <option value="3">3 AM</option>
                                            <option value="4">4 AM</option>
                                            <option value="5">5 AM</option>
                                            <option value="5">6 AM</option>
                                            <option value="5">7 AM</option>
                                            <option value="5">8 AM</option>
                                            <option value="5">9 AM</option>
                                            <option value="5">10 AM</option>
                                            <option value="5">11 AM</option>
                                            <option value="5">12 AM</option>

                                        </select>
										&nbsp;&nbsp;
										&nbsp;&nbsp;
										<select class="rating"  data-readonly="true">
                                            <option value="1">1 PM</option>
                                            <option value="2">2 PM</option>
                                            <option value="3">3 PM</option>
                                            <option value="4">4 PM</option>
                                            <option value="5">5 PM</option>
                                            <option value="5">6 PM</option>
                                            <option value="5">7 PM</option>
                                            <option value="5">8 PM</option>
                                            <option value="5">9 PM</option>
                                            <option value="5">10 PM</option>
                                            <option value="5">11 PM</option>
                                            <option value="5">12 PM</option>

                                        </select>
                                        </div>
										</td>
										<th>No</th>
										<td><span class="time-in">9 AM</span> &nbsp; <span class="time-in">5 PM</span></td>
										<td>
											<div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchtwo" type="checkbox">
                                                <label class="custom-switch-btn" for="switchtwo"></label>
                                            </div>
										</td>
										<td>
											<div class="form-group mb-1">
                                        <select class="rating" data-readonly="true">
                                            <option value="1">1 AM</option>
                                            <option value="2">2 AM</option>
                                            <option value="3">3 AM</option>
                                            <option value="4">4 AM</option>
                                            <option value="5">5 AM</option>
                                            <option value="5">6 AM</option>
                                            <option value="5">7 AM</option>
                                            <option value="5">8 AM</option>
                                            <option value="5">9 AM</option>
                                            <option value="5">10 AM</option>
                                            <option value="5">11 AM</option>
                                            <option value="5">12 AM</option>

                                        </select>
										&nbsp;&nbsp;
										&nbsp;&nbsp;
										<select class="rating"  data-readonly="true">
                                            <option value="1">1 PM</option>
                                            <option value="2">2 PM</option>
                                            <option value="3">3 PM</option>
                                            <option value="4">4 PM</option>
                                            <option value="5">5 PM</option>
                                            <option value="5">6 PM</option>
                                            <option value="5">7 PM</option>
                                            <option value="5">8 PM</option>
                                            <option value="5">9 PM</option>
                                            <option value="5">10 PM</option>
                                            <option value="5">11 PM</option>
                                            <option value="5">12 PM</option>

                                        </select>
                                        </div>
										</td>
										<td>2</td>
										<td>14</td>
									</tr>
                                </tbody>



									<tr>
                                        <th scope="row">02/06/2020</th>
										<th>Yes</th>
										<td><span class="time-in">9 AM</span> &nbsp; <span class="time-in">5 PM</span></td>
										<td>
											<div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchthree" type="checkbox">
                                                <label class="custom-switch-btn" for="switchthree"></label>
                                            </div>
										</td>
										<td>
											<div class="form-group mb-1">
                                        <select class="rating" data-readonly="true">
                                            <option value="1">1 AM</option>
                                            <option value="2">2 AM</option>
                                            <option value="3">3 AM</option>
                                            <option value="4">4 AM</option>
                                            <option value="5">5 AM</option>
                                            <option value="5">6 AM</option>
                                            <option value="5">7 AM</option>
                                            <option value="5">8 AM</option>
                                            <option value="5">9 AM</option>
                                            <option value="5">10 AM</option>
                                            <option value="5">11 AM</option>
                                            <option value="5">12 AM</option>

                                        </select>
										&nbsp;&nbsp;
										&nbsp;&nbsp;
										<select class="rating"  data-readonly="true">
                                            <option value="1">1 PM</option>
                                            <option value="2">2 PM</option>
                                            <option value="3">3 PM</option>
                                            <option value="4">4 PM</option>
                                            <option value="5">5 PM</option>
                                            <option value="5">6 PM</option>
                                            <option value="5">7 PM</option>
                                            <option value="5">8 PM</option>
                                            <option value="5">9 PM</option>
                                            <option value="5">10 PM</option>
                                            <option value="5">11 PM</option>
                                            <option value="5">12 PM</option>

                                        </select>
                                    </div>
										</td>
										<th>No</th>
										<td><span class="time-in">9 AM</span> &nbsp; <span class="time-in">5 PM</span></td>
										<td>
											<div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchfour" type="checkbox">
                                                <label class="custom-switch-btn" for="switchfour"></label>
                                            </div>
										</td>
										<td>
											<div class="form-group mb-1">
                                        <select class="rating" data-readonly="true">
                                            <option value="1">1 AM</option>
                                            <option value="2">2 AM</option>
                                            <option value="3">3 AM</option>
                                            <option value="4">4 AM</option>
                                            <option value="5">5 AM</option>
                                            <option value="5">6 AM</option>
                                            <option value="5">7 AM</option>
                                            <option value="5">8 AM</option>
                                            <option value="5">9 AM</option>
                                            <option value="5">10 AM</option>
                                            <option value="5">11 AM</option>
                                            <option value="5">12 AM</option>

                                        </select>
										&nbsp;&nbsp;
										&nbsp;&nbsp;
										<select class="rating"  data-readonly="true">
                                            <option value="1">1 PM</option>
                                            <option value="2">2 PM</option>
                                            <option value="3">3 PM</option>
                                            <option value="4">4 PM</option>
                                            <option value="5">5 PM</option>
                                            <option value="5">6 PM</option>
                                            <option value="5">7 PM</option>
                                            <option value="5">8 PM</option>
                                            <option value="5">9 PM</option>
                                            <option value="5">10 PM</option>
                                            <option value="5">11 PM</option>
                                            <option value="5">12 PM</option>

                                        </select>
                                    </div>
										</td>
										<th>No</th>
										<td><span class="time-in">9 AM</span> &nbsp; <span class="time-in">5 PM</span></td>
										<td>
											<div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchSfive" type="checkbox">
                                                <label class="custom-switch-btn" for="switchfive"></label>
                                            </div>
										</td>
										<td>
											<div class="form-group mb-1">
                                        <select class="rating" data-readonly="true">
                                            <option value="1">1 AM</option>
                                            <option value="2">2 AM</option>
                                            <option value="3">3 AM</option>
                                            <option value="4">4 AM</option>
                                            <option value="5">5 AM</option>
                                            <option value="5">6 AM</option>
                                            <option value="5">7 AM</option>
                                            <option value="5">8 AM</option>
                                            <option value="5">9 AM</option>
                                            <option value="5">10 AM</option>
                                            <option value="5">11 AM</option>
                                            <option value="5">12 AM</option>

                                        </select>
										&nbsp;&nbsp;
										&nbsp;&nbsp;
										<select class="rating"  data-readonly="true">
                                            <option value="1">1 PM</option>
                                            <option value="2">2 PM</option>
                                            <option value="3">3 PM</option>
                                            <option value="4">4 PM</option>
                                            <option value="5">5 PM</option>
                                            <option value="5">6 PM</option>
                                            <option value="5">7 PM</option>
                                            <option value="5">8 PM</option>
                                            <option value="5">9 PM</option>
                                            <option value="5">10 PM</option>
                                            <option value="5">11 PM</option>
                                            <option value="5">12 PM</option>

                                        </select>
                                    </div>
										</td>
										<td>2</td>
										<td>14</td>
									</tr>
									<tr>
                                        <th scope="row">03/06/2020</th>
										<th>Yes</th>
										<td><span class="time-in">9 AM</span> &nbsp; <span class="time-in">5 PM</span></td>
										<td>
											<div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchsix" type="checkbox">
                                                <label class="custom-switch-btn" for="switchsix"></label>
                                            </div>
										</td>
										<td>
											<div class="form-group mb-1">
                                        <select class="rating" data-readonly="true">
                                            <option value="1">1 AM</option>
                                            <option value="2">2 AM</option>
                                            <option value="3">3 AM</option>
                                            <option value="4">4 AM</option>
                                            <option value="5">5 AM</option>
                                            <option value="5">6 AM</option>
                                            <option value="5">7 AM</option>
                                            <option value="5">8 AM</option>
                                            <option value="5">9 AM</option>
                                            <option value="5">10 AM</option>
                                            <option value="5">11 AM</option>
                                            <option value="5">12 AM</option>

                                        </select>
										&nbsp;&nbsp;
										&nbsp;&nbsp;
										<select class="rating"  data-readonly="true">
                                            <option value="1">1 PM</option>
                                            <option value="2">2 PM</option>
                                            <option value="3">3 PM</option>
                                            <option value="4">4 PM</option>
                                            <option value="5">5 PM</option>
                                            <option value="5">6 PM</option>
                                            <option value="5">7 PM</option>
                                            <option value="5">8 PM</option>
                                            <option value="5">9 PM</option>
                                            <option value="5">10 PM</option>
                                            <option value="5">11 PM</option>
                                            <option value="5">12 PM</option>

                                        </select>
                                    </div>
										</td>
										<th>Yes</th>
										<td><span class="time-in">9 AM</span> &nbsp; <span class="time-in">5 PM</span></td>
										<td>
											<div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchseven" type="checkbox">
                                                <label class="custom-switch-btn" for="switchseven"></label>
                                            </div>
										</td>
										<td>
											<div class="form-group mb-1">
                                        <select class="rating" data-readonly="true">
                                            <option value="1">1 AM</option>
                                            <option value="2">2 AM</option>
                                            <option value="3">3 AM</option>
                                            <option value="4">4 AM</option>
                                            <option value="5">5 AM</option>
                                            <option value="5">6 AM</option>
                                            <option value="5">7 AM</option>
                                            <option value="5">8 AM</option>
                                            <option value="5">9 AM</option>
                                            <option value="5">10 AM</option>
                                            <option value="5">11 AM</option>
                                            <option value="5">12 AM</option>

                                        </select>
										&nbsp;&nbsp;
										&nbsp;&nbsp;
										<select class="rating"  data-readonly="true">
                                            <option value="1">1 PM</option>
                                            <option value="2">2 PM</option>
                                            <option value="3">3 PM</option>
                                            <option value="4">4 PM</option>
                                            <option value="5">5 PM</option>
                                            <option value="5">6 PM</option>
                                            <option value="5">7 PM</option>
                                            <option value="5">8 PM</option>
                                            <option value="5">9 PM</option>
                                            <option value="5">10 PM</option>
                                            <option value="5">11 PM</option>
                                            <option value="5">12 PM</option>

                                        </select>
                                    </div>
										</td>
										<th>Yes</th>
										<td><span class="time-in">9 AM</span> &nbsp; <span class="time-in">5 PM</span></td>
										<td>
											<div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switcheight" type="checkbox">
                                                <label class="custom-switch-btn" for="switcheight"></label>
                                            </div>
										</td>
										<td>
											<div class="form-group mb-1">
                                        <select class="rating" data-readonly="true">
                                            <option value="1">1 AM</option>
                                            <option value="2">2 AM</option>
                                            <option value="3">3 AM</option>
                                            <option value="4">4 AM</option>
                                            <option value="5">5 AM</option>
                                            <option value="5">6 AM</option>
                                            <option value="5">7 AM</option>
                                            <option value="5">8 AM</option>
                                            <option value="5">9 AM</option>
                                            <option value="5">10 AM</option>
                                            <option value="5">11 AM</option>
                                            <option value="5">12 AM</option>

                                        </select>
										&nbsp;&nbsp;
										&nbsp;&nbsp;
										<select class="rating"  data-readonly="true">
                                            <option value="1">1 PM</option>
                                            <option value="2">2 PM</option>
                                            <option value="3">3 PM</option>
                                            <option value="4">4 PM</option>
                                            <option value="5">5 PM</option>
                                            <option value="5">6 PM</option>
                                            <option value="5">7 PM</option>
                                            <option value="5">8 PM</option>
                                            <option value="5">9 PM</option>
                                            <option value="5">10 PM</option>
                                            <option value="5">11 PM</option>
                                            <option value="5">12 PM</option>

                                        </select>
                                    </div>
										</td>
										<td>2</td>
										<td>14</td>
									</tr>
                                   <tr>
                                        <th scope="row">Total Month</th>
                                        <th colspan="4">38</th>
                                        <th colspan="4">36</th>
                                        <th colspan="4">42</th>
                                        <th></th>
                                        <th>238</th>

                                    </tr>
                               
                            </table>
							<div class="separator mb-5"></div>
						<div class="col-12 text-center mb-3">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
                        </div>
						<!-- <div class="separator mb-5"></div> -->

                    </div>
				</div>
			</div>
         </div>
</template>

<script>
import moment from 'moment';
export default {
    props:['store_route','store_staff_route'],
    data(){
        return{
            store_data:{},
            current:null,
            monthYearData:{},
            store_staff_data:{},
            availbility:{},
            monthYear:null,
            yearMonth:null,
            daysInMonth:null,
            form:{
                store_id:null,
                month_year:null,
                staffs:[]
            }
        }
    },
    created(){
        this.stores();
        this.setMonthYear();
        this.getDate();

        $("#store_dropD").on('change',function(){ alert($("#store_dropD").val());});
           
    console.log(this.monthYearData);
       

    },
    methods:{

    getDate(){
      var month = moment().add(1,'months');
      this.monthYear = month.format("MMM-YYYY");
      this.yearMonth = month.format("YYYY-MM");
      this.daysInMonth = month.daysInMonth();
    },

        setMonthYear(){
            var i;
            for(i=1; i<5; i++){
                this.monthYearData[moment().add(i,'months').format('MM-YYYY')] = moment().add(i,'months').format('MMM-YYYY');
            }
        },

        stores(){
            axios.get(this.store_route).then(response=>{
                this.store_data = response.data;
            });
        },

        store_staff(){
            axios.post(this.store_staff_route,this.form).then(response=>{
                 this.store_staff_data = response.data.staff_data;
                 this.availbility = response.data.availbility;
            });

            
        }


    }
}
</script>

<style lang="css" scoped>
</style>
