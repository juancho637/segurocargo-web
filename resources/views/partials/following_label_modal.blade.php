<div class="modal" id="followingLabelModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-body">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Rastreo de sellos</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>No. de Sello</label>
                            <input value="{{ $data['info']['No. de Sello'] }}" class="form-control" disabled>
                        </div>
                        <div class="form-group col-md-8">
                            <label>Estado</label>
                            <input value="{{ $data['info']['Estado'] }}" class="form-control" disabled>
                        </div>
                        <div class="form-group col-md-7">
                            <label>Destino final</label>
                            <input value="{{ $data['info']['Destino final'] }}" class="form-control" disabled>
                        </div>
                        <div class="form-group col-md-5">
                            <label>Peso + Peso volumen</label>
                            <input value="{{ $data['info']['Peso + Peso volumen'] }}" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="timeline">
                        <ul>
                            @foreach ($data['tracking'] as $item)
                            <li>
                                <div class="content">
                                    @if($item['site'])
                                    <h3>{{ $item['site'] }}</h3>
                                    @endif
                                    <p>{{ $item['tracing'] }}</p>
                                </div>
                                <div class="time">
                                    <h4>{{ $item['date'] }}</h4>
                                </div>
                            </li>   
                            @endforeach                                                     
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>