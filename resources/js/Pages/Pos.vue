<template>
    <div>
        <div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">ຂາຍໜ້າຮ້ານ POS</h2>
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
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<input type="text" class="form-control" v-model="SearchProduct" @keyup.enter="GetStore()"   placeholder="ຄົ້ນຫາສິນຄ້າ...">
					</div>
				</div>
				<div class="row" style="height: 67vh; overflow: auto;">
					<div class="col-md-3" v-for="list in DataProduct.data" :key="list.id" >
								<div class="card cursor-pointer" @click="AddToOrder(list.id)">
								<span v-for="li in ListOrder" :key="li.id">
									<div class="box-item" v-if="list.id == li.id" > {{ li.order_amount }} </div>	
								</span>
								<img v-if="list.images" class="img-fluid card-img-top" :src="'assets/img/'+list.images" style="width:100%; height: 140px; object-fit: cover; object-position: center;">
								<img v-if="!list.images" class="img-fluid card-img-top" :src="'assets/img/no_image.jpg'" style="width:100%; height: 140px; object-fit: cover; object-position: center;">
								<div class="card-body text-center p-1">
									<p class="card-text mb-0">{{ cut_word(list.name,10)  }}</p>
									<p class="card-text text-info"> {{ formatPrice(list.price_sell) }} ກີບ </p>
								</div>
							</div>
					</div>
					
					
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title text-info d-flex justify-content-between">
							<span> <strong>ລວມຍອດເງິນ: </strong> </span>
							<span> <strong> {{ formatPrice(TotalAmount) }} ກີບ</strong> </span>
						</h4>
						<button type="button"  class="btn btn-success text-white mb-2" @click="BtPay()" :disabled="check_pay" style="width: 100%" >
                            <i class="mdi mdi-currency-usd"></i> ຊຳລະເງິນ
                        </button>
						<div class=" table-responsive" style="height: 65vh; overflow: auto">
							<table class="table table-bordered mg-b-0 text-md-nowrap border">
										<thead>
											<tr>
												<th>ລາຍການ</th>
												<th>ລາຄາ</th>
												<th>ຍອດລວມ</th>
											</tr>
										</thead>
										<tbody>
											<tr v-for="item in ListOrder" :key="item.id">
												<td> {{item.name}} </td>
												<td class=" text-right"> {{ formatPrice(item.price_sell) }} <br>
														<i class="fa fa-minus-circle cursor-pointer text-warning" @click="DelOne(item.id)"></i> {{ item.order_amount }} <i class="fa fa-plus-circle cursor-pointer text-info" @click="AddOne(item.id)"></i> |  <i class="fa fa-times-circle cursor-pointer text-danger" @click="DelOneList(item.id)"></i>
												 </td>
												<td class=" text-right">{{ formatPrice(item.price_sell * item.order_amount) }}</td>
											</tr>
										</tbody>
									</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="Modal_Pay" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">ຊຳລະສິນຄ້າ</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                            </div>
                                             <div class="modal-body">
                                               <h4 class="card-title text-info d-flex justify-content-between">  <span> <strong> ລວມຍອດເງິນ: </strong></span> <span><strong>{{formatPrice(TotalAmount)}} ກີບ</strong></span>  </h4>
                                               <h4 class="card-title text-info d-flex justify-content-between">  <span> <strong> ຮັບເງິນນຳລູກຄ້າ: </strong></span> <span><strong>{{formatPrice(CashAmount)}} ກີບ</strong></span>  </h4>
                                               <h4 class="card-title text-danger d-flex justify-content-between" v-if="CashBack>0">  <span> <strong> ເງິນທອນ: </strong></span> <span><strong>{{formatPrice(CashBack)}} ກີບ</strong></span>  </h4>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" v-model="CashAmount" style="text-align:right;" >
                                                    </div>
                                                 <div class="p-2 justify-content-center d-flex">
                                                        <div class="row" style="width:250px">
                                                        <div class="col-4 text-center  mt-2">
                                                            <a  class="btn btn-primary btn-lg text-white" @click="AddNum(1)" style="width:60px">1</a>
                                                        </div>
                                                        <div class="col-4 text-center mt-2">
                                                            <a class="btn btn-primary btn-lg text-white" @click="AddNum(2)" style="width:60px">2</a>
                                                        </div>
                                                        <div class="col-4 text-center mt-2">
                                                            <a class="btn btn-primary btn-lg text-white" @click="AddNum(3)" style="width:60px">3</a>
                                                        </div>
                                                        <div class="col-4 text-center mt-2">
                                                            <a class="btn btn-primary btn-lg text-white" @click="AddNum(4)" style="width:60px">4</a>
                                                        </div>
                                                        <div class="col-4 text-center mt-2">
                                                            <a class="btn btn-primary btn-lg text-white" @click="AddNum(5)" style="width:60px">5</a>
                                                        </div>
                                                        <div class="col-4 text-center mt-2">
                                                            <button type="button" class="btn btn-primary btn-lg text-white" @click="AddNum(6)" style="width:60px">6</button>
                                                        </div>
                                                        <div class="col-4 text-center mt-2">
                                                            <a class="btn btn-primary btn-lg text-white" @click="AddNum(7)" style="width:60px">7</a>
                                                        </div>
                                                        <div class="col-4 text-center mt-2">
                                                            <a class="btn btn-primary btn-lg text-white" @click="AddNum(8)" style="width:60px">8</a>
                                                        </div>
                                                        <div class="col-4 text-center mt-2">
                                                            <a class="btn btn-primary btn-lg text-white" @click="AddNum(9)" style="width:60px">9</a>
                                                        </div>
                                                        <div class="col-4 text-center mt-2">
                                                            <a class="btn btn-primary btn-lg text-white" @click="AddNum('00')" style="width:60px">00</a>
                                                        </div>
                                                        <div class="col-4 text-center mt-2">
                                                            <a class="btn btn-primary btn-lg text-white" @click="AddNum(0)" style="width:60px">0</a>
                                                        </div>
                                                        <div class="col-4 text-center mt-2">
                                                            <a  class="btn btn-danger btn-lg text-white" @click="AddNum('-')" style="width:60px"><i class="fas fa-long-arrow-alt-left"></i></a>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-center d-flex mt-2 text-center">
                                                        <button type="button" class="btn btn-success" @click="ConfirmPay()"  style="width:180px;" :disabled="CheckCPay"><i class="fas fa-coins"></i> ຍືນຍັນຊຳລ່ະເງິນ </button>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info waves-effect text-white" data-bs-dismiss="modal">ປິດ</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

    </div>

</template>

<script>
export default {
    name: 'MyWebAppPos',

    data() {
        return {
            DataProduct:[],
			SearchProduct:'',
			ListOrder:[],
			CashAmount:'',
			CashBack:''
        };
    },

    mounted() {
        
    },
	computed:{
		CheckCPay(){
			if(parseInt(this.CashAmount)-parseInt(this.TotalAmount)>=0){
				return false;
			} else {
				return true;
			}
		},
		CashBack(){
			return  parseInt(this.CashAmount)-parseInt(this.TotalAmount);
		},
		TotalAmount(){
			return this.ListOrder.reduce((num, item) => num + (item.price_sell * item.order_amount), 0)
		},
		check_pay(){
			if(this.TotalAmount){
				return false;
			} else {
				return true;
			}
		}
	},
	watch:{
		SearchProduct(){
			if(this.SearchProduct==''){
				this.GetStore();
			}
		}
	},
    methods: {
		ConfirmPay(){

			this.$axios.get("/sanctum/csrf-cookie").then((response) => {

                this.$axios.post("/api/transection/add",{
                    acc_type:'income',
                    listorder: this.ListOrder
                })
                .then((response) => {
                    if (response.data.success) {
                        $('#Modal_Pay').modal('hide');
                        this.ListOrder = [];
                        this.CashAmount = '';
                        this.GetStore();
                    } else {
                        console.log(response.data.message);
                    }
                    })
                    .catch((error) => {
                    console.log(error);
                    });

            });
		},
		AddNum(num){
			if(num=='-'){
				this.CashAmount = this.CashAmount.slice(0,-1);
			} else {
				this.CashAmount = this.CashAmount + num;
			}
		},
		BtPay(){
			$('#Modal_Pay').modal('show');
		},
		cut_word(text,num){
			if(text.length>num){
				return text.substring(0,num)+'...';
			} else {
				return text;
			}
		},
		AddOne(id){
		
			let item = this.DataProduct.data.find((i)=>i.id==id);
			let list_order = this.ListOrder.find((i)=>i.id==id);

			//console.log(list_order)

			if(list_order){

				let old_order_amount = list_order.order_amount;
				if(item.amount - old_order_amount>0){
					list_order.order_amount = old_order_amount+1;
				} else {
					alert('ສີນຄ້າໝົດ');
				}
			}

		},
		DelOne(id){

			if(this.ListOrder.find((i)=>i.id==id)){
				let old_order_amount = this.ListOrder.find((i)=>i.id==id).order_amount;
						
				if(old_order_amount-1>0){
					this.ListOrder.find((i)=>i.id==id).order_amount = old_order_amount-1;
				} else {
					this.ListOrder.splice(this.ListOrder.map(i=>i.id).indexOf(id),1);
				}
			}

		},
		DelOneList(id){
				this.ListOrder.splice(this.ListOrder.map(i=>i.id).indexOf(id),1);
		},
		AddToOrder(id){

				let item = this.DataProduct.data.find((i)=>i.id==id);

				let list_order = this.ListOrder.find((i)=>i.id==id);

				if(list_order){
					let old_order_amount = list_order.order_amount;
					if(item.amount - old_order_amount>0){
							if(this.ListOrder.find((i)=>i.id==id)){
								this.ListOrder.find((i)=>i.id==id).order_amount++;
							} else {
								this.ListOrder.push({
									id: item.id,
									name: item.name,
									price_sell: item.price_sell,
									order_amount: 1
								});
							}
					} else {
						alert('ສີນຄ້າໝົດ');
					}
				} else {
					
					let chnum = this.DataProduct.data.find((i)=>i.id==id);
					if(chnum){
						if(chnum.amount>0){
							if(this.ListOrder.find((i)=>i.id==id)){
							this.ListOrder.find((i)=>i.id==id).order_amount++;
							} else {
								this.ListOrder.push({
									id: item.id,
									name: item.name,
									price_sell: item.price_sell,
									order_amount: 1
								});
							}
						} else {
							alert('ສີນຄ້າໝົດ');
						}
					}

					
				}
				

				
				
		},
		GetStore(page){
			this.$axios.get("/sanctum/csrf-cookie").then((response)=>{
				this.$axios.get(`/api/store?page=${page}&search=${this.SearchProduct}`)
				.then((response)=>{
						this.DataProduct = response.data;
				}).catch((error)=>{
					console.log(error);
				})
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

<style >
.box-item{
	position: absolute;
    right: 0;
    background-color: blue;
    color: white;
    font-weight: bold;
    padding: 5px;
    border-radius: 0px 0px 0px 10px;
}
</style>