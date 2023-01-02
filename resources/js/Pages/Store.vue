
<template>
    <div>
        <div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">ສະຕ໋ອກສິນຄ້າ</h2>
						  <p class="mg-b-0">Sales monitoring dashboard template.</p>
						</div>
					</div>
					<div class="main-dashboard-header-right">
						<div>
							<label class="tx-13">Customer Ratings</label>
							<div class="main-star">
								<i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i class="typcn typcn-star"></i> <span>(14,873)</span>
							</div>
						</div>
						<div>
							<label class="tx-13">Online Sales</label>
							<h5>563,275</h5>
						</div>
						<div>
							<label class="tx-13">Offline Sales</label>
							<h5>783,675</h5>
						</div>
					</div>
				</div>
        <div class="row">
					
					<dashcard/>
					

                    <div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="mg-b-0"> ລາຍການ ສ໋ອກສິນຄ້າ <!-- | check_form: {{check_form}} --></h4>
                                    <span > 
                                        <button class="btn btn-info-gradient new-btn mx-1" v-if="!FormShow" @click="add_product()" >ເພີ່ມໃໝ່</button>
                                        <button class="btn btn-success-gradient new-btn mx-1" :class="check_form" v-if="FormShow" @click="save_product()" >ບັນທຶກ</button>
                                        <button class="btn btn-danger-gradient new-btn mx-1" v-if="FormShow" @click="cancel_product()" >ຍົກເລີກ</button>
                                    </span>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Valex Bordered Table.. <a href="">Learn
										more</a></p>
							</div>
							<div class="card-body">
								<!-- {{FormProduct}}
								<hr>
								 {{ FormData }} -->
                                <div class="row" v-if="FormShow" >
                                    <div class="col-md-3">
                                            <img :src="imagePreview" alt="">
											<input type="file" @change="onSeclected" class="mt-2" >
                                    </div>
                                    <div class="col-md-9">
					
                                            <div class="form-group">
												<label for="product_name">ຊື່ສິນຄ້າ <span class=" text-danger">*</span></label>
												<input type="text" class="form-control" id="product_name" v-model="FormProduct.name" placeholder="ປ້ອນຊື່ສິນຄ້າ...">
											</div>
                                            <div class="form-group">
												<label for="product_amount">ຈຳນວນ <span class=" text-danger">*</span></label>
												<cleave :options="options" class="form-control" id="product_amount" v-model="FormProduct.amount" placeholder="ປ້ອນຈຳນວນສິນຄ້າ..." />
											</div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="product_buy">ລາຄາຊື້ <span class=" text-danger">*</span></label>
                                                    <cleave :options="options" class="form-control" id="product_buy" v-model="FormProduct.price_buy" placeholder="ປ້ອນລາຄາຊື້..."/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="product_sell">ລາຄາຂາຍ <span class=" text-danger">*</span></label>
                                                    <cleave :options="options" class="form-control" id="product_sell" v-model="FormProduct.price_sell" placeholder="ປ້ອນລາຄາຂາຍ..."/>
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
								
								<div v-if="!FormShow" >

								
								<div class="row pb-2 d-flex justify-content-end">
										<div class="col-md-3">
												<input type="text" class="form-control"  v-model="SearchProduct" @keyup.enter="GetStore()" placeholder="ຄົ້ນຫາສິນຄ້າ...">
										
										</div>
									</div>

								<div class="table-responsive" >
									 
									
					
									

									<table class="table table-bordered mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>ID</th>
												<th>ຊື່ສິນຄ້າ</th>
												<th>ຈຳນວນ</th>
												<th>ລາຄາຊື້</th>
												<th class=" text-center">ຈັດການ</th>
											</tr>
										</thead>
										<tbody>
											<tr v-for="list in FormData.data" :key="list.id">
												<th scope="row"> {{ list.id }} </th>
												<td style="vertical-align: middle;" > {{ list.name }} <br> 
													
													{{timeago(list.created_at)}}
												
													
												 </td>
												<td > {{ list.amount}} </td>
												<td> {{ formatPrice(list.price_buy)}} </td>
												<td class=" text-center">
                                                    <div class="btn-icon-list justify-content-center">
                                                        <button class="btn btn-primary btn-icon" @click="edit_product(list.id)"> <i class="fa fa-edit"></i> </button>
                                                        <button class="btn btn-danger btn-icon" @click="del_product(list.id)" ><i class="far fa-trash-alt"></i></button>
                                                    </div>
                                                </td>
											</tr>
											

											
										</tbody>
									</table>

									<pagination :pagination="FormData" @paginate="GetStore($event)" :offset="4" ></pagination>

								</div>
							</div>


							</div>
						</div>
					</div>
					
					
				</div>
    </div>
</template>
<script>

import moment from "moment";
//import VueMomentsAgo from 'vue-moments-ago'

export default {
    name: 'MyWebAppStore',
	components:{
		moment
	},
    data() {
        return {
			imagePreview: window.location.origin + '/assets/img/add-image.jpg',
			imageProduct:'',
            FormShow: false,
			FormType: true,
			FormID:'',
            FormProduct:{
                name:"",
                amount:"",
                price_buy:"",
                price_sell:""
            },
			FormData: [],
			options:{
				   // prefix: '$',
					numeral: true,
					numeralPositiveOnly: true,
					noImmediatePrefix: true,
					rawValueTrimPrefix: true,
					numeralIntegerScale: 10,
					numeralDecimalScale: 2,
					numeralDecimalMark: '.',
					delimiter: ','
			},
			SearchProduct:'',
        };
    },

    mounted() {
        
    },
	watch:{
		SearchProduct(){
			if(this.SearchProduct==''){
				this.GetStore();
			}
		}
	},
	computed:{
		check_form(){
			if(this.FormProduct.name == '' || this.FormProduct.amount == '' || this.FormProduct.price_buy == '' || this.FormProduct.price_sell == ''){
				return 'disabled';
			} else {
				return ''
			}
		}
	},
    methods: {
		timeago(value){
			return moment(value).fromNow();
		},
		onSeclected(event){
				console.log(event.target.files[0]);

				this.imageProduct = event.target.files[0];
				let reader = new FileReader();
				reader.readAsDataURL(this.imageProduct);
				reader.addEventListener("load", function(){
					this.imagePreview = reader.result;
				}.bind(this), false);
		},
		GetStore(page){

			this.$axios.get("/sanctum/csrf-cookie").then((response)=>{
				this.$axios.get(`/api/store?page=${page}&search=${this.SearchProduct}`)
				.then((response)=>{
						this.FormData = response.data;
				}).catch((error)=>{
					console.log(error);
				})

			});

		},
        add_product(){
			
			///this.$swal('ເພີ່ມຂໍ້ມູນໃໝ່!!!');
			this.imagePreview = window.location.origin + '/assets/img/add-image.jpg';
            this.FormShow = true
			// clear ຂໍ້ມູນ 
			this.FormProduct.name = '';
			this.FormProduct.amount = '';
			this.FormProduct.price_buy = '';
			this.FormProduct.price_sell ='';

        },
        cancel_product(){
            this.FormShow = false
        },
		save_product(){
			//alert(this.FormProduct);
			//console.log(this.FormProduct);

			if(this.FormType){  // ຖ້າ FormType = true ໃຫ້ທຳການບັນທຶກຂໍ້ມູນໃໝ່

					// ເພີ່ມຂໍ້ມູນເຂົ້າໄປ FormData
					// this.FormData.push({
					// 	id: Math.floor(Math.random()*1000),
					// 	name: this.FormProduct.name,
					// 	amount: this.FormProduct.amount,
					// 	price_buy: this.FormProduct.price_buy,
					// 	price_sell: this.FormProduct.price_sell,
					// });

					// ເພີ່ມຂໍ້ມູນເຂົ້າຖານຂໍ້ມູນ

					let newformData = new FormData();
						newformData.append('name', this.FormProduct.name);
						newformData.append('amount', this.FormProduct.amount);
						newformData.append('price_buy', this.FormProduct.price_buy);
						newformData.append('price_sell', this.FormProduct.price_sell);
						newformData.append('file', this.imageProduct);
						newformData.append('acc_type','expense');

					this.$axios.get("/sanctum/csrf-cookie").then((response)=>{

							this.$axios.post("/api/store/add", newformData, {headers:{"Content-Type": "multipart/form-date"}})
							.then((response)=>{

									this.FormShow = false;
									this.GetStore();
									
							}).catch((error)=>{
								console.log(error);
							})
					});

					


			} else { // ຖ້າ FormType ບໍ່ເທົ່າ True ( FormType = false ) ໃຫ້ທຳການອັບເດດ ຂໍ້ມູນ ໂດຍອ້າງອິງຈາກ FormID

				
				// this.FormData.find((i)=>i.id == this.FormID).name = this.FormProduct.name;
				// this.FormData.find((i)=>i.id == this.FormID).amount = this.FormProduct.amount;
				// this.FormData.find((i)=>i.id == this.FormID).price_buy = this.FormProduct.price_buy;
				// this.FormData.find((i)=>i.id == this.FormID).price_sell = this.FormProduct.price_sell;
				

				// let fdata = this.FormData.find((i)=>i.id == this.FormID);

				// fdata.name = this.FormProduct.name;
				// fdata.amount = this.FormProduct.amount;
				// fdata.price_buy = this.FormProduct.price_buy;
				// fdata.price_sell = this.FormProduct.price_sell;


					let newformData = new FormData();
						newformData.append('name', this.FormProduct.name);
						newformData.append('amount', this.FormProduct.amount);
						newformData.append('price_buy', this.FormProduct.price_buy);
						newformData.append('price_sell', this.FormProduct.price_sell);
						newformData.append('file', this.imageProduct);
						let id_update = this.FormID;
					this.$axios.get("/sanctum/csrf-cookie").then((response)=>{

							this.$axios.post(`/api/store/update/${id_update}`, newformData, {headers:{"Content-Type": "multipart/form-date"}})
							.then((response)=>{

									this.FormShow = false;
									this.GetStore();
									
							}).catch((error)=>{
								console.log(error);
							})
					});


			}

			// clear ຂໍ້ມູນ 
			this.FormProduct.name = '';
			this.FormProduct.amount = '';
			this.FormProduct.price_buy = '';
			this.FormProduct.price_sell ='';
			
			// ສະແດງລາຍການ ສິນຄ້າ, ເຊື່ອງໜ້າຟອມ
			this.FormShow = false;

			// ກຳນົດ ປະເພດຟອມ ເປັນການເພີ່ມໃໝ່
			this.FormType = true;
		},
		edit_product(id){
			//	alert(id);

			//let item = this.FormData.find((i)=>i.id == id);
			//console.log(id)


			// ດຶງຂໍ້ມູນ ຈາກຖານຂໍ້ມູນ
			this.$axios.get("/sanctum/csrf-cookie").then((response)=>{

					this.$axios.post(`/api/store/edit/${id}`)
							.then((response)=>{

								this.FormProduct.name = response.data.name;
								this.FormProduct.amount = response.data.amount;
								this.FormProduct.price_buy = response.data.price_buy;
								this.FormProduct.price_sell = response.data.price_sell;

								//this.imagePreview = response.data.images;

								if(response.data.images){
									this.imagePreview = window.location.origin + '/assets/img/'+response.data.images;
								} else {
									this.imagePreview = window.location.origin + '/assets/img/add-image.jpg';
								}
									
							}).catch((error)=>{
								console.log(error);
							})

			});
			
			// ສະແດງໜ້າຟອມ
			this.FormShow = true;

			// ກຳນົດ ປະເພດຟອມ ໃຫ້ເປັນການອັບເດດ
			this.FormType = false;

			// ກຳນົດ ID ທີ່ຈະຕ້ອງອັບເດດ
			this.FormID = id;

			// ແອັດຂໍ້ມູນເຂົ້າຟອມ
			// this.FormProduct.name = item.name;
			// this.FormProduct.amount = item.amount;
			// this.FormProduct.price_buy = item.price_buy;
			// this.FormProduct.price_sell = item.price_sell;
		},
		del_product(id){

			// ສະແດງ ບ໋ອກຊອບຖາມ
			this.$swal.fire({
			title: 'ທ່ານແນ່ໃຈບໍ່?',
			text: "ທີ່ຈະລຶບຂໍ້ມູນລາຍການນີ້!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'ຍືນຍັນລຶບ!',
			cancelButtonText:'ຍົກເລີກ'
			}).then((result) => {
			if (result.isConfirmed) {
				
				
				// ຄົ້ນຫາ index ໂດຍໃຊ້ id ຄົ້ນຫາໃນຂໍ້ມູນ 
				//let index = this.FormData.map((i)=>i.id).indexOf(id);

				// ໃຊ້ index ທີ່ຄົ້ນຫາເຫັນແລ້ວ ທຳການລຶບອອກ
				//this.FormData.splice(index,1);
				//console.log(index);

				// ສະແດງຂໍ້ຄວາມແຈ້ງເຕືອນໃນການລຶບ
				// this.$swal.fire(
				// 'ລຶບສຳເລັດ!',
				// 'ຂໍ້ມູນໄດ້ຖຶກລຶບແລ້ວ.',
				// 'success'
				// );


				/// ລຶບຂໍ້ມູນ ໃນຖານຂໍ້ມູນ

				this.$axios.get("/sanctum/csrf-cookie").then((response)=>{

							this.$axios.delete(`/api/store/delete/${id}`)
							.then((response)=>{

								this.GetStore();
								
								this.$swal.fire(
									'ລຶບສຳເລັດ!',
									'ຂໍ້ມູນໄດ້ຖຶກລຶບແລ້ວ.',
									'success'
									);

							}).catch((error)=>{
								console.log(error);
							})
					});
			}
			});
			
			
		},
		formatPrice(value) {
			let val = (value / 1).toFixed(0).replace(",", ".");
			return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		},
    },

	created(){
		this.GetStore();
	},

	beforeRouteEnter(to, from, next){
			if(!window.Laravel.isLoggedin_laravel){
				window.location.href = "/login";
			}

			next();
	}
};
</script>

<style>

</style>