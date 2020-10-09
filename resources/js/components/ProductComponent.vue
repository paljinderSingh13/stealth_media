<template>
  <div >
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
               <h1 class="hding-pos">Product</h1>
               <div class="separator mb-5"></div>
            </div>
         </div>
   <div class="row">
   <div class="col-6 mb-3">

     </div>

     <div class="col-6 text-right mb-3">
       <a @click="newForm();" v-show="newFormBtn" type="button" class="btn btn-primary"  href="#">Add Product</a>
     </div>
     <div class="col-lg-4 col-md-12 col-12 mt-3">

       <div class="search-product">
         <h5 class="card-title pt-1 pb-3">Search By</h5>
         <div class="search-input mb-2">
           <input type="text" class="form-control" id="searchbarcode" placeholder="Barcode"><a href="#">
             <i class="simple-icon-arrow-right"></i></a>
         </div>
         <div class="search-input mb-2">
           <input type="text" class="form-control" v-model="form.searchimei" id="searchbarimei" placeholder="IMEI"><a href="#" @click="searchimei(form.searchimei); prod_detail=true; form_inputs=false; newFormBtn=true; success=false; danger=false; form.searchimei=null;">
             <i class="simple-icon-arrow-right"></i></a>
         </div>
         <div class="search-input">
           <input type="text" class="form-control" v-model="form.searchname" id="searchname" placeholder="Name"><a href="#" @click="searchname(form.searchname); prod_detail=true; form_inputs=false; newFormBtn=true; success=false; danger=false; form.searchname=null;">
             <i class="simple-icon-arrow-right"></i></a>
         </div>
       </div>
       <!-- <div class="most-search">
         <h3>Most Searched Product</h3>
         <ul>
           <li>Product 1 Lorem Ipsum Dummy Text</li>
           <li>Product 2 Lorem Ipsum Dummy Text</li>
           <li>Product 3 Lorem Ipsum Dummy Text</li>
           <li>Product 4 Lorem Ipsum Dummy Text</li>
           <li>Product 5 Lorem Ipsum Dummy Text</li>
         </ul>
       </div> -->
     </div>
     <div class="col-lg-8 col-md-12 col-12 mt-3">
       <div class="search-product"  v-show="form_inputs">
         <h5 class="card-title pt-1 pb-3" v-show="addprod">Add Product</h5>
         <h5 class="card-title pt-1 pb-3" v-show="editprod">Edit Product</h5>

       <div class="card-body">
           <form>
               <div class="form-row">
                   <div class="form-group col-md-4">
                       <label for="inputname">Product Name</label>
                       <input type="text" v-model="form.prod_name" name="prod_name" class="form-control" id="" placeholder="Product Name">
                   </div>

               <div class="form-group col-md-4">
                   <label for="inputAddress">Category</label>
                   <input type="text" v-model="form.category" class="form-control" name="category" id="inputCategory"
                       placeholder="Category">
               </div>
               <div class="form-group col-md-4">
                   <label for="inputAddress2">Brand</label>
                   <input type="text" class="form-control" v-model="form.brand" name="brand" id="inputBrand"
                       placeholder="Brand">
               </div>
             </div>

               <div class="form-row">
               <div class="form-group col-md-4">
                   <label for="inputAddress2">Supplier</label>
                   <input type="text" class="form-control" v-model="form.supplier" name="supplier" id="inputSupplier"
                       placeholder="Supplier">
               </div>
               <div class="form-group col-md-4">
                   <label for="inputAddress2">Model</label>
                   <input type="text" class="form-control" v-model="form.model" name="model" id="inputModel"
                       placeholder="Model">
               </div>
              <div class="form-group col-md-4">
                   <label for="inputAddress2">Color</label>
                   <input type="text" class="form-control" v-model="form.color" name="color" id="inputColor"
                       placeholder="Color">
               </div>
             </div>
             <div class="form-row">
               <div class="form-group col-md-4">
                   <label for="inputAddress2">IMEI number </label>
                   <input type="text" class="form-control" v-model="form.imei" name="imei" id="inputimei"
                       placeholder="IMEI number ">
               </div>
               <div class="form-group col-md-4">
                   <label for="inputAddress2">Stock </label>
                   <input type="text" class="form-control" v-model="form.stock" name="stock" id="inputstock"
                       placeholder="Stock ">
               </div>
               <div class="form-group col-md-4">
                   <label for="inputAddress2">Price </label>
                   <input type="text" class="form-control" v-model="form.price" name="price" id="inputprice"
                       placeholder="Price ">
               </div>
             </div>
               <a @click="save(); addprod=true;editprod=false;" class="btn btn-primary text-white mx-3">Submit</a>
           </form>
       </div>
     </div>
        <div class="tab-content" v-for="item in search_data" v-show="prod_detail">
           <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
            <div class="product-details">
           <div class="row">

             <div class="col-lg-6 col-md-12 col-12">
             <div class="product-inr-details">
                 <div class="row">
                   <div class="col-12">
                     <h3>Product: {{item.prod_name}}</h3>
                     <h4><span>Category: {{item.category}}</span></h4>

                   </div>
                   <!-- <div class="col-6 text-right">
                     <button type="submit" class="btn btn-primary">View Detail</button>
                   </div> -->
                 </div>
                 <h5 class="card-title mt-3">Details</h5>
                 <h4><span>IEMI Number: {{item.imei}}</span></h4>
                 <h4><span>Model: {{item.model}}</span></h4>
                 <h4><span>Brand: {{item.brand}}</span></h4>
                 <h4><span>Color: {{item.color}}</span></h4>
                 <h4><span>Supplier: {{item.supplier}}</span></h4>

               </div>


             </div>
             <div class="col-lg-6 col-md-12 col-12">


               <div class="row">
                 <div class="col-5">
                     <div class="price-detail">
                     <p>Price</p>
                     <h4><span>$209</span></h4>
                   </div>
                   </div>
                     <div class="col-7">
                       <div class="discount-detail">
                         <h4>Current Discount: <span>$15</span></h4>
                       </div>
                       <div class="discount-detail">
                         <h4>Minimum selling Price: <span>$185</span></h4>
                       </div>
                     </div>
                   <div class="separator mb-3"></div>
                 <div class="col-5 mt-3">

                   <div class="available-section">
                     <p>Availability</p>
                     <h4><span>{{item.stock}}</span></h4>

                   </div>

                 </div>
                 <div class="col-7 mt-3">
                 <div class="available-section">
                     <p>Store <span> Lorem Ipsum</span></p>
                     <p><span class="map-icon"><i class="fa fa-map-marker"></i></span></p>

                   </div>

                 </div>
                 <div class="col-12 mt-3">
                 <div class="available-section">
                       <button type="submit" class="btn btn-primary">View Detail</button>
                 <a @click="edit(item); danger=false; success=false;" class="btn btn-primary text-white">Edit</a>
                   </div>

                 </div>
               </div>
             </div>
             </div>


           </div>
                     </div>


                 </div>
     </div>
   </div>
   <div class="row">
     <div class="col-12">
       <h5 class="all-cstm card-title mt-5"> Most Searched Product </h5>
       <div class="separator mb-5"></div>
       <ul class="product-most">
         <li>Iphone 10</li>
         <li>S10 Lite</li>
         <li>One Plus Nord</li>
         <li>Iphone 11 pro max</li>
         <li>Oppo Reno 2</li>
       </ul>
     </div>
   </div>
   <div class="row">
     <div class="col-12">
       <h5 class="all-cstm card-title mt-4"> All products </h5>
       <div class="separator mb-5"></div>
        <div class="card">
                     <div class="card-body">
                       <div class="row">
                         <div class="col-3 offset-6 mb-4">
                           <select class="form-control" v-model="filter.filter" data-width="100%" tabindex="-1" aria-hidden="true">
                             <option>Select Filter</option>
                               <option value="category">Category</option>
                               <option value="brand">Brand</option>
                               <option value="supplier">Supplier</option>
                               <option value="model">Model</option>
                               <option value="color">Colour</option>
                           </select>
                         </div>
                         <div class="col-3 mb-4">
                             <div class="input-group">
                                                  <input type="text" v-model="filter.search_filter" class="form-control typeahead" name="query" id="query"
                                                      placeholder="Search here..." data-provide="typeahead"
                                                      autocomplete="off">
                                                  <div class="input-group-append ">
                                                      <a href="#" @click="filter_search(filter.filter,filter.search_filter)" class="btn btn-primary default">
                                                          <i class="simple-icon-magnifier"></i>
                                                      </a>
                                                  </div>
                                              </div>
                         </div>
                       </div>
                         <table class="data-table data-table-scrollable responsive nowrap"
                             data-order="[[ 1, &quot;desc&quot; ]]">
                             <thead>
                                 <tr>
                                     <th>S.No</th>
                                     <th>Name</th>
                                     <th>Sales</th>
                                     <th>Stock</th>
                                     <th>Category</th>
                                     <th>Action</th>

                                 </tr>
                             </thead>
                             <tbody>
                                 <tr v-for="(row,index) in api_data">
                                    <th scope="row">{{index+1}}</th>
                                     <td>
                                         <p class="list-item-heading">{{row.prod_name}}</p>
                                     </td>
                                     <td>
                                         <p class="text-muted">{{row.sales}}</p>
                                     </td>
                                     <td>
                                         <p class="text-muted">{{row.stock}}</p>
                                     </td>
                                     <td>
                                         <p class="text-muted">{{row.category}}</p>
                                     </td>
                                     <td>
                                       <a @click="edit(row); danger=false; success=false;" class="btn btn-sm btn-primary text-white mb-1">Edit</a>
                                       <a @click="destroy(row.id); danger=false; success=false;" class="btn btn-sm btn-danger mb-1 text-white">Delete</a>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
                 <!-- {{api_data[0].prod_name}}
                 {{api_data}} -->
     </div>
   </div>
 </div>
</template>

<script>
export default {
  props: ['list_route', 'store_route', 'del_route', 'search_imei_route', 'search_name_route', 'filter_route'],
  data(){
    return{
        success: false,
        danger: false,
        prod_detail: false,
        form_inputs: true,
        newFormBtn: false,
        addprod: true,
        editprod:false,
        form:{
          searchimei: null,
          searchname: null,
          prod_name: null,
          category: null,
          brand: null,
          supplier: null,
          model: null,
          color: null,
          price: null,
          imei: null,
          stock: null,
          sales: null,
        },
        filter:{
          filter: null,
          search_filter: null,
        },
        api_data:{},
        edit_data:{},
        search_data:{},
        successful:{},
        errors:{}
    }
  },
  created(){
        this.list();
  },
  methods: {

    filter_search(filter,search_filter){
        axios.get(this.filter_route+'/'+filter+'/'+search_filter).then(response=>{
          this.api_data = response.data;
          console.log(response.data);
          window.scrollTo(0, 1000);

        });
    },
    newForm(){
        this.form_inputs = true;
        this.newFormBtn = false;
        this.prod_detail=false;
        this.form_inputs=true;
        this.clear();
    },
    clear(){
      this.form = {id:null, prod_name:null,category:null,brand:null,supplier:null,model:null,color:null,imei:null,stock:null,sales:null},this.danger=false;
    },
    list(){
      axios.get(this.list_route).then(response=>{
        this.api_data = response.data;
        console.log(response.data);
      });
    },
    save(){
      axios.post(this.store_route,this.form).then(response=>{
          console.log(response.data);
          this.list();
          this.successful = response.data.success;
          this.success = true;
          this.data = response.data;
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
      this.form_inputs = true;
      this.newFormBtn = false;
      this.prod_detail=false;
      this.form_inputs=true;
      this.addprod = false;
      this.editprod = true;
      window.scrollTo(0, 0);

    },
    destroy(id){
          var result = confirm('Do you really want to delete this product');
          if(result){
            axios.post(this.del_route+'/'+id).then(response=>{
              this.list();
              console.log(response.data);
              this.success = true;
              this.successful = response.data.success;
              window.scrollTo(0, 0);
            }).catch(error=>{
                    console.log("ERRRR:: ",error.response.data);
                    this.errors = error.response.data.errors;
                    this.danger = true;
                    window.scrollTo(0, 0);

            });
          }

    },
    searchimei(input){
      axios.get(this.search_imei_route+'/'+input).then(response=>{
          console.log(response.data);
          this.search_data = response.data;
      });
    },
    searchname(input){
      axios.get(this.search_name_route+'/'+input).then(response=>{
          console.log(response.data);
          this.search_data = response.data;
      });
    },
  }
}
</script>

<style lang="css" scoped>
</style>
