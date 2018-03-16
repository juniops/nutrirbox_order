<?php

use yii\helpers\Html;

$this->title = Yii::t('backend', 'Pages');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="page-index">

    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-3 border-primary">
                <div class="card-header text-white bg-primary"><em class="fa fa-first-order"></em> NOVO PEDIDO</div>
                <div class="card-body">
                    <form class="form-horizontal">
                        <fieldset>
                            <legend>Cliente</legend>
                            <div class="form-group row">
                                <label class="col-xl-3 col-form-label">Nome ou Telefone</label>
                                <div class="col-xl-5">
                                    <input class="form-control" placeholder="parte do nome ou telefone" type="text">
                                </div>
                                <div class="col-xl-4">
                                    <span> ou </span>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#newClient">
                                        <em class="fa fa-address-book"></em> novo cliente
                                    </button>
                                </div>
                            </div>
                        </fieldset>



                        <legend>Pedido</legend>

                        <div class="form-group row">
                            <label class="col-xl-4 col-form-label">Forma de Pagamento</label>
                            <div class="col-xl-8">
                                <select class="form-control">
                                    <option>Cartão</option>
                                    <option>Dinheiro</option>
                                    <option>Vale Refeição</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-xl-4 col-form-label">Data de Entrega</label>
                            <div class="col-xl-8">
                                <input class="form-control" placeholder="data de entrega" type="date">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xl-9">
                                <button class="btn btn-sm btn-primary" type="submit"><em class="fa fa-save"></em>
                                    Finalizar Pedido
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">

            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-6 text-center">
                            <img class="circle thumb96"
                                 src="http://themicon.co/theme/angle/v3.8.6/html5jquery-bs4/app/img/user/09.jpg"
                                 alt="Image">
                        </div>
                        <div class="col-6">
                            <h3 class="mt-0">Peggy Peters</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1">
                                    <em class="fa fa-map-marker fa-fw"></em>ASD, Qwerty
                                </li>
                                <li class="mb-1">
                                    <em class="fa fa-twitter fa-fw"></em>@asdasd
                                </li>
                                <li class="mb-1">
                                    <em class="fa fa-envelope fa-fw"></em>asdasd@mail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-inverse">
                    <div class="row text-center">
                        <div class="col-4">
                            <p class="m-0 h3">700</p>
                            <p class="m-0 text-muted">Followers</p>
                        </div>
                        <div class="col-4">
                            <p class="m-0 h3">1500</p>
                            <p class="m-0 text-muted">Following</p>
                        </div>
                        <div class="col-4">
                            <p class="m-0 h3">510</p>
                            <p class="m-0 text-muted">Loved</p>
                        </div>
                    </div>
                </div>

                <hr>

                <ul class="timeline">
                    <li class="timeline-separator" data-datetime="Now"></li>
                    <!-- START timeline item-->
                    <li>
                        <div class="timeline-badge primary">
                            <em class="fa fa-users"></em>
                        </div>
                        <div class="timeline-card">
                            <div class="popover left">
                                <h4 class="popover-header">Client Meeting</h4>
                                <div class="arrow"></div>
                                <div class="popover-body">
                                    <p>Av 123 St - Floor 2
                                        <br>
                                        <small>Pellentesque ut diam velit, eget porttitor risus. Nullam posuere euismod
                                            volutpat.
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item-->
                    <!-- START timeline item-->
                    <li class="timeline-inverted">
                        <div class="timeline-badge warning">
                            <em class="fa fa-phone"></em>
                        </div>
                        <div class="timeline-card">
                            <div class="popover right">
                                <h4 class="popover-header">Call</h4>
                                <div class="arrow"></div>
                                <div class="popover-body">
                                    <p>Michael<a href="tel:+011654524578">(+011) 6545 24578 ext. 132</a>
                                        <br>
                                        <small>Pellentesque ut diam velit, eget porttitor risus. Nullam posuere euismod
                                            volutpat.
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item-->
                    <!-- START timeline separator-->
                    <li class="timeline-separator" data-datetime="Yesterday"></li>
                    <!-- END timeline separator-->
                    <!-- START timeline item-->
                    <li>
                        <div class="timeline-badge danger">
                            <em class="fa fa-video-camera"></em>
                        </div>
                        <div class="timeline-card">
                            <div class="popover left">
                                <h4 class="popover-header">Conference</h4>
                                <div class="arrow"></div>
                                <div class="popover-body">
                                    <p>Join development group</p>
                                    <small>
                                        <a href="skype:echo123?call">
                                            <em class="fa fa-phone mr-2"></em>Call the Skype Echo</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item-->
                    <!-- START timeline item-->
                    <li class="timeline-inverted">
                        <div class="timeline-card">
                            <div class="popover right">
                                <h4 class="popover-header">Appointment</h4>
                                <div class="arrow"></div>
                                <div class="popover-body">
                                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare
                                        sem lacinia quam.</p>
                                    <div class="btn-group">
                                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" data-play="fadeIn">
                                            <em class="fa fa-paperclip"></em>
                                        </a>
                                        <div class="dropdown-menu text-left">
                                            <a class="dropdown-item" href="#">
                                                <em class="fa fa-download mr-2"></em>Download</a>
                                            <a class="dropdown-item" href="#">
                                                <em class="fa fa-share mr-2"></em>Send to</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <a class="dropdown-item" href="#">
                        <em class="fa fa-times mr-2"></em>Delete</a>
                </ul>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="newClient" role="dialog" aria-labelledby="newClient" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-xl-3 col-form-label">Cidade</label>
                        <div class="col-xl-9">
                            <input class="form-control" placeholder="Cidade" type="text">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-form-label">Endereço</label>
                        <div class="col-xl-9">
                            <input class="form-control" placeholder="Endereço" type="text">
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><em class="fa fa-close"></em>
                    fechar
                </button>
                <button type="button" class="btn btn-primary"><em class="fa fa-address-book"></em> Adicionar</button>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
