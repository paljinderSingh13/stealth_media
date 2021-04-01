<template>
    <div class="container-fluid">
            <div class="row">
                 {{current}}
                {{form}}
                {{store_staff_data}}
                {{availbility}}
               <div class="col-12">
                  <h1 class="hding-pos">Roster Management</h1>
                  <div class="separator mb-5"></div>
               </div>
            </div>
			<div class="row">
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
						<option >Month-Year</option>
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
                        <div class="card-body">
<div class="main_rostermanage">
    <div class="hading_roster">
        <div class="roster_data width_one">
            <p> Date</p>
            
        </div>  
        <div class="roster_data width_two" v-for="row in store_staff_data" :key="row.id">
            <p>{{row.first_name}} {{row.last_name}}</p>
            <div class="row roster-inr">
                <div class="col-3 pr-0">
                    <p>Availabilty Toggle</p>
                </div>
                <div class="col-4 pr-0">
                    <p>Availabilty Hours</p>
                </div>
                <div class="col-2 pr-0">
                    <p>Shift Toggle</p>
                </div>
                <div class="col-3">
                    <p>Shift Hours</p>
                </div>
            </div>
            
        </div>
        
         
         
        <div class="roster_data width_one">
            <p>Total Staffs</p>
            
        </div>
        <div class="roster_data width_one">
            <p> Total Hours</p>
           
        </div>
    </div>

    <div class="hading_roster" v-for="n in daysInMonth">
        <div class="roster_data width_one">
            
            <p class="date-roster">{{n}}-{{monthYear}}</p>
        </div>
       
        
        <div class="roster_data width_two" v-for="row in store_staff_data">
            
           <div class="row roster-inr">
                <div class="col-3 pr-0">
                    <p v-if="availbility[yearMonth+'-'+n]">
                        <b  v-if="availbility[yearMonth+'-'+n][row.id]">Yes</b>
                        <b  v-else> No</b>
                    </p>
                    <p v-else>
                        <b>No</b>
                    </p>
                 
                </div>
                <div class="col-4 pr-0">
                    <p v-if="availbility[yearMonth+'-'+n]">
                        <span class="time-ins"  v-if="availbility[yearMonth+'-'+n][row.id]">
                           <span v-if="availbility[yearMonth+'-'+n][row.id][0]"> {{ availbility[yearMonth+'-'+n][row.id][0]['shift_start']}}AM </span>
                             <span v-else> - </span>
                        </span>

                        <span class="time-ins"  v-else>
                            -
                        </span>
                        
                         &nbsp; 
                        <span class="time-ins"  v-if="availbility[yearMonth+'-'+n][row.id]">
                           <span v-if="availbility[yearMonth+'-'+n][row.id][0]"> {{ availbility[yearMonth+'-'+n][row.id][0]['shift_end']}}PM </span>
                             <span v-else> - </span>
                        </span>
                          <span class="time-ins"  v-else>
                            -
                        </span>
                    </p>
                    <p v-else>
                        <span class="time-ins">-</span>
                        <span class="time-ins">-</span>
                       

                    </p>
                </div>
                <div class="col-2 pr-0">
                    <div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                        <input class="custom-switch-input" id="switchS" type="checkbox">
                        <label class="custom-switch-btn" for="switchS"></label>
                    </div>
                </div>
                <div class="col-3">
                    <select class="" data-readonly="true">
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
                <select class=""  data-readonly="true">
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
            </div>
        </div>
        
        
        
        
        <div class="roster_data width_one">
            
            <p class="date-roster">2</p>
        </div>
        <div class="roster_data width_one">
            
            <p class="date-roster">14</p>
        </div>
    </div>

</div>                          






						<div class="main_rostermanage">
							<div class="hading_roster">
								<div class="roster_data width_one">
									<p> Date</p>
									<br>
									<br>
									<p class="date-roster">01/06/2020</p>
								</div>
								<div class="roster_data width_two">
									<p>Anurag</p>
									<div class="row roster-inr">
										<div class="col-3 pr-0">
											<p>Availabilty Toggle</p>
										</div>
										<div class="col-4 pr-0">
											<p>Availabilty Hours</p>
										</div>
										<div class="col-2 pr-0">
											<p>Shift Toggle</p>
										</div>
										<div class="col-3">
											<p>Shift Hours</p>
										</div>
									</div>
									<div class="row roster-inr">
										<div class="col-3 pr-0">
											<p><b>Yes</b></p>
										</div>
										<div class="col-4 pr-0">
											<p><span class="time-ins">9 AM</span> &nbsp; <span class="time-ins">5 PM</span></p>
										</div>
										<div class="col-2 pr-0">
											<div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchS" type="checkbox">
                                                <label class="custom-switch-btn" for="switchS"></label>
                                            </div>
										</div>
										<div class="col-3">
											<select class="" data-readonly="true">
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
										<select class=""  data-readonly="true">
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
									</div>
								</div>
								<div class="roster_data width_two">
									<p>Jake</p>
									<div class="row roster-inr">
										<div class="col-3 pr-0">
											<p>Availabilty Toggle</p>
										</div>
										<div class="col-4 pr-0">
											<p>Availabilty Hours</p>
										</div>
										<div class="col-2 pr-0">
											<p>Shift Toggle</p>
										</div>
										<div class="col-3">
											<p>Shift Hours</p>
										</div>
									</div>
									<div class="row roster-inr">
										<div class="col-3 pr-0">
											<p><b>Yes</b></p>
										</div>
										<div class="col-4 pr-0">
											<p><span class="time-ins">9 AM</span> &nbsp; <span class="time-ins">5 PM</span></p>
										</div>
										<div class="col-2 pr-0">
											<div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchS" type="checkbox">
                                                <label class="custom-switch-btn" for="switchS"></label>
                                            </div>
										</div>
										<div class="col-3">
											<select class="" data-readonly="true">
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
										<select class=""  data-readonly="true">
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
									</div>
								</div>
								<div class="roster_data width_two">
									<p>Dane</p>
									<div class="row roster-inr">
										<div class="col-3 pr-0">
											<p>Availabilty Toggle</p>
										</div>
										<div class="col-4 pr-0">
											<p>Availabilty Hours</p>
										</div>
										<div class="col-2 pr-0">
											<p>Shift Toggle</p>
										</div>
										<div class="col-3">
											<p>Shift Hours</p>
										</div>
									</div>
									<div class="row roster-inr">
										<div class="col-3 pr-0">
											<p><b>Yes</b></p>
										</div>
										<div class="col-4 pr-0">
											<p><span class="time-ins">9 AM</span> &nbsp; <span class="time-ins">5 PM</span></p>
										</div>
										<div class="col-2 pr-0">
											<div class="custom-switch custom-switch-primary mb-2 custom-switch-small">
                                                <input class="custom-switch-input" id="switchS" type="checkbox">
                                                <label class="custom-switch-btn" for="switchS"></label>
                                            </div>
										</div>
										<div class="col-3">
											<select data-readonly="true">
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
										<select   data-readonly="true">
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
									</div>
								</div>
								<div class="roster_data width_one">
									<p>Total Staffs</p>
									<br>
									<br>
									<p class="date-roster">2</p>
								</div>
								<div class="roster_data width_one">
									<p> Total Hours</p>
									<br>
									<br>
									<p class="date-roster">14</p>
								</div>
							</div>
							
							
							
						</div>
							
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
