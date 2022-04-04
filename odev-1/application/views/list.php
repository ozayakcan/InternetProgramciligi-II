<html lang="tr">

<head>
    <?php $this->load->view("includes/header.php"); ?>
    <title>Form Uygulamasi Ödev</title>
</head>

<body>
    <div class="container container-table">
        <div class="row justify-content-center vertical-center-row">
            <div class="col-12 pb-5">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">İsim</th>
                            <th scope="col">Eposta</th>
                            <th scope="col">Mesaj</th>
                            <th scope="col">Düzenle</th>
                            <th scope="col">Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($items as $item) {
                            echo '
                        <tr>
                            <td>' . $item->ad_soyad . '</td>
                            <td>' . $item->eposta . '</td>
                            <td>' . $item->mesaj . '</td>
                            <td><button class="btn btn-success btn-block rounded-0 py-2" data-toggle="modal" data-target="#exampleModal' . $item->id . '">Düzenle</button></td>
                            <td><a href="' . base_url("form/delete/" . $item->id) . '" class="btn btn-danger btn-block rounded-0 py-2">Sil</a></td></td>
                        </tr>';
                            echo '
                            <div class="modal fade" id="exampleModal' . $item->id . '" tabindex="-1" role="dialog" aria-labelledby="exampleModal' . $item->id . 'Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content m-0">
                                        <div class="modal-header m-0">
                                            <h5 class="modal-title" id="exampleModal' . $item->id . 'Label">Düzenle</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body mt-1">
                                        <form action="' . base_url("form/update/" . $item->id) . '" method="post">
                                            <div class="card rounded-0">
                                                <div class="form-group">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" id="ad_soyad" name="ad_soyad" value="' . $item->ad_soyad . '" placeholder="Ad Soyad" required="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                                    </div>
                                                    <input type="email" class="form-control" id="eposta" name="eposta" value="' . $item->eposta . '" placeholder="Eposta Adresi" required="">
                                                </div>
                                            </div>
                
                                            <div class="form-group">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                                    </div>
                                                    <textarea class="form-control" id="mesaj" name="mesaj" placeholder="Mesajınız" required="">' . $item->mesaj . '</textarea>
                                                </div>
                                            </div>
                
                                            <div class="text-center">
                                                <input type="submit" value="Kaydet" class="btn btn-info btn-block rounded-0 py-2">
                                            </div>
                
                                            <div class="text-center mt-2">
                                            <button type="button" class="btn btn-danger btn-block rounded-0 py-2" data-dismiss="modal">İptal</button>
                                            </div>
                        
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <?php $this->load->view("includes/footer.php"); ?>
</body>

</html>