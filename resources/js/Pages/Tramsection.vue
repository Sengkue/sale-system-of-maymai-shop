<template>
    <div>
        <div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">ການເຄື່ອນໄຫວ</h2>
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
       
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">ການເຄື່ອນໄຫວ ທຸລະກຳ</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								
							</div>
							<div class="card-body">

									<div class="row pd-b-10 justify-content-end">
                                            <div class="btn-group me-2" role="group" aria-label="Basic example" style="width:180px;"> 
                                                <button type="button" class="btn btn-secondary" @click="monthtype = 'm'"> <i class="mdi mdi-menu-right" v-if="monthtype == 'm'"></i> ເດືອນ</button>
                                                <button type="button" class="btn btn-secondary" @click="monthtype = 'y'"> <i class="mdi mdi-menu-right" v-if="monthtype == 'y'"></i> ປີ</button>
                                            </div>
                                            <input type="date" style="width: 180px;" v-model="dmy" class="form-control me-2">
                                            <button class="btn btn-success text-white me-2" @click="GetTran()"  style="width:180px;">
                                                <i class="mdi mdi-view-list"></i> ສະແດງການເຄື່ອນໄຫວ
                                            </button>
                                        </div>


								<div class="table-responsive">
									<table class="table table-striped mg-b-0 text-md-nowrap border">
										<thead>
											<tr>
												<th width="120">ວັນທີ່</th>
												<th width="120">ເລກທີ່ທຸລະກຳ</th>
												<th width="120">ປະເພດທຸລະກຳ</th>
												<th>ລາຍລະອຽດ</th>
												<th width="150">ມູນຄ່າ</th>
											</tr>
										</thead>
										<tbody>
											<tr v-for="trn in DataTransection.data" :key="trn.id">
												<td>{{ date(trn.created_at) }}</td>
												<td>{{ trn.tran_id }}</td>
												<td>{{ trn.tran_type }}</td>
												<td>{{ trn.tran_detail }}</td>
												<td class=" text-right">{{ formatPrice(trn.price_sell) }} ກີບ</td>
											</tr>
										</tbody>
									</table>
									<pagination :pagination="DataTransection" @paginate="GetTran($event)" :offset="4" ></pagination>
								</div><!-- bd -->
							</div><!-- bd -->
						</div><!-- bd -->
					
    </div>
</template>

<script>

	import moment from "moment";

export default {
    name: 'MyWebAppTramsection',

    data() {
        return {
            DataTransection:[],
			monthtype:'y',
			dmy:''
        };
    },
	components:{
		moment
	},
    mounted() {
        
    },

    methods: {
		date(value){
			return moment(value).format("DD/MM/YYYY");
		},
	  formatPrice(value) {
			let val = (value / 1).toFixed(0).replace(",", ".");
			return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		},
        GetTran(page){
			this.$axios.get("/sanctum/csrf-cookie").then((response)=>{
				this.$axios.post(`/api/transection?page=${page}`,{
					monthtype: this.monthtype,
					dmy: this.dmy
				})
				.then((response)=>{
						this.DataTransection = response.data;
				}).catch((error)=>{
					console.log(error);
				})

			});

		},
    },
	created(){
		this.GetTran();
	},
	beforeRouteEnter(to, from, next){
			if(!window.Laravel.isLoggedin_laravel){
				window.location.href = "/login";
			}

			next();
	}
};
</script>

<style lang="scss" scoped>

</style>