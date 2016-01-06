<section>
    <div class="row">
        <h3 class="title">Order <span>History</span> </h3>
    </div>
    <div class="row">
        <div class="three columns sidenav">
            <ul class="sidenav">
                <li><a href="{{url('member')}}">Order History</a></li>
                <li><a href="{{url('member/profile/edit')}}">Edit Profile</a></li>
            </ul>
        </div>
        <div class="nine columns section">
            @if($pengaturan->checkoutType != 2)
                @if($order->count() != 0)
                <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Kode Order</th>
                            <th>Tanggal Order</th>
                            <th>Detail Order</th>
                            <th>Total Order</th>
                            <th>No. Resi</th>
                            <th>Status</th>
                            <th>Konfirmasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (list_order() as $item)
                        <tr>
                            <td>{{$pengaturan->checkoutType==3 ? prefixOrder().$item->kodePreorder : prefixOrder().$item->kodeOrder}}</td>
                            <td>{{$pengaturan->checkoutType==3 ? waktu($item->tanggalPreorder) : waktu($item->tanggalOrder)}}</td>
                            <td>
                                <ul>
                                @if($pengaturan->checkoutType==3) 
                                    <li>{{$item->preorderdata->produk->nama}} ({{$item->opsiSkuId==0 ? 'No Opsi' : $item->opsisku['opsi1'].($item->opsisku['opsi2']!='' ? ' / '.$item->opsisku['opsi2']:'').($item->opsisku['opsi3']!='' ? ' / '.$item->opsisku['opsi3']:'')}}) - {{$item->jumlah}}<li>
                                @else 
                                    @foreach ($item->detailorder as $detail)
                                    <li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</li>
                                    @endforeach 
                                @endif
                                </ul>
                            </td>
                            <td class="quantity">{{ price($item->total) }}</td>
                            <td class="sub-price">{{ $item->noResi }}</td>
                            <td class="total-price">
                            @if($pengaturan->checkoutType==1) 
                                @if($item->status==0)
                                <span class="label label-warning">Pending</span>
                                @elseif($item->status==1)
                                <span class="label label-info">Konfirmasi diterima</span>
                                @elseif($item->status==2)
                                <span class="label label-success">Pembayaran diterima</span>
                                @elseif($item->status==3)
                                <span class="label label-success">Terkirim</span>
                                @elseif($item->status==4)
                                <span class="label label-danger">Batal</span>
                                @endif 
                            @else 
                                @if($item->status==0)
                                <span class="label label-warning">Pending</span>
                                @elseif($item->status==1)
                                <span class="label label-info">Konfirmasi DP diterima</span>
                                @elseif($item->status==2)
                                <span class="label label-success">DP terbayar</span>
                                @elseif($item->status==3)
                                <span class="label label-info">Menunggu pelunasan</span>
                                @elseif($item->status==4)
                                <span class="label label-success">Pembayaran lunas</span>
                                @elseif($item->status==5)
                                <span class="label label-success">Terkirim</span>
                                @elseif($item->status==6)
                                <span class="label label-danger">Batal</span>
                                @elseif($item->status==7)
                                <span class="label label-info">Konfirmasi Pelunasan diterima</span>
                                @endif
                            @endif
                            </td>
                            <td class="center">
                            @if($pengaturan->checkoutType==3) 
                                @if($item->status < 4)
                                <div class="metro rounded btn default">
                                    <a href="{{url('konfirmasipreorder/'.$item->id)}}"><i class="icon-eye"></i></a>
                                </div>
                                @endif 
                            @endif
                            @if($pengaturan->checkoutType==1) 
                                @if($item->status <= 1)
                                <div class="metro rounded btn default">
                                    <a href="{{url('konfirmasiorder/'.$item->id)}}"><i class="icon-eye"></i></a>
                                </div>
                                @endif 
                            @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                {{list_order()->links()}} 
                @else
                <span>Belum ada data order.</span>
                @endif
            @else
                @if($inquiry->count() != 0)
                <table>
                    <thead>
                        <tr>
                            <th>Kode Order</th>
                            <th>Tanggal Order</th>
                            <th>Detail Order</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inquiry as $item)
                        <tr>
                            <td>{{prefixOrder().$item->kodeInquiry}}</td>
                            <td>{{waktu($item->created_at)}}</td>
                            <td>
                                @foreach ($item->detailInquiry as $detail)
                                <li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</li>
                                @endforeach
                            </td>
                            <td>
                                @if($item->status==0)
                                <span class="label label-warning">Pending</span>
                                @elseif($item->status==1)
                                <span class="label label-success">Inquiry diterima</span>
                                @elseif($item->status==2)
                                <span class="label label-info">Batal</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                @else
                    <tr><td colspan="2">Inquiry anda masih kosong</td></tr>
                @endif
                </table>                
            @endif
        </div>
    </div>
</section>