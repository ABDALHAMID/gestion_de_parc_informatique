@extends('layout')

@section('headScripts')
    <style>
        .qr-modal {
            border-radius: 3rem 0 3rem 3rem;
            border-color: #0a011fea;
            border-width: 5px;
            margin: auto;
            padding: 10px;
            background-color: #f0eaff;
            overflow: hidden;
        }

        .qr-modal::backdrop {
            background-color: #0a011fc5;
            backdrop-filter: blur(7px);
        }

        .dn {
            display: none;
        }

        .dialog-buttons {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .close-btn{
            position: relative;
            width: 100%;
        }
        .close-btn button{
            position: relative;
            top: 0;
            left: 90%;
        }
        .materiel-logo{
            position: fixed;
            top: 80px;
            right: 150px;
            width: 200px;
            height: 200px;
            z-index: 0;

        }
        .materiel-logo img{
            position: absolute;
            z-index: -3;
            object-fit: fill;

            transition: .7s ease;
        }
        .materiel-logo h4{
            position: absolute;
            z-index: -4;
            font-size: 2rem;
            transform: translateY(50px);
        }
        .materiel-logo:hover > img{
            transform: translateX(-250px);
        }
        .td-style{
            background-color: #e5e5e5;
            backdrop-filter: blur(3px);
            -webkit-backdrop-filter: blur(3px);
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"
        integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @include('materiel.back')
                <div class="materiel-logo">
                    <h4>{{ $materiel->materielType->type }}</h4>
                    <img src="{{ url('imgs/') }}/{{ $materiel->materielType->type }}.png" alt="">
                </div>
                <div class="row m-b-20 m-t-50">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left m-r-20">
                            <button onclick="getQRcode()" class="btn btn-outline-secondary m-9" style="width: 3rem; height: 3rem;"><i class="fa fa-qrcode" style="transform: scale(2.5); margin: auto;"></i></button>
                            <span><b>voir QR code</b></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                            <div class="au-card-inner">
                                <div class="table-responsive">
                                    <table class="table table-top-countries">
                                        <tbody>
                                            <tr>
                                                <td>type de materiel</td>
                                                <td class="text-right">{{ $type }}</td>
                                            </tr>
                                            <tr>
                                                <td>la marque</td>
                                                <td class="text-right">{{ $marque }}</td>
                                            </tr>
                                            <tr>
                                                <td>le modele</td>
                                                <td class="text-right">{{ $modele }}</td>
                                            </tr>
                                            <tr>
                                                <td>le numero de serie</td>
                                                <td class="text-right">{{ $materiel->N_serie }}</td>
                                            </tr>
                                            <tr>
                                                <td>le numero d'inventair</td>
                                                <td class="text-right">{{ $materiel->N_Inventair }}</td>
                                            </tr>
                                            <tr>
                                                <td>la division</td>
                                                <td class="text-right">{{ $affictation }}</td>
                                            </tr>
                                            <tr>
                                                <td>les caraceristiques</td>
                                                <td class="text-right">{{ $materiel->caractéristiques }}</td>
                                            </tr>
                                            <tr>
                                                <td>la date d'aqusition</td>
                                                <td class="text-right">{{ $materiel->date_aqusition }}</td>
                                            </tr>
                                            <tr>
                                                <td>l'etat</td>
                                                <td class="text-right">{{ $materiel->état }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">tableau des ports</h3>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th class="td-style">port</th>
                                        <th class="td-style">mac address</th>
                                        <th class="td-style">ip address</th>
                                        <th class="td-style">masque reseaux</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ports as $port)
                                        <tr class="tr-shadow">
                                            <td>{{ $port->port }}</td>
                                            <td>
                                                <span class="block-email">{{ $port->mac_address }}</span>
                                            </td>
                                            <td class="desc">{{ $port->ip_address }}</td>
                                            <td>{{ $port->masque_reseau }}</td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
                    </div>
                </div>




            </div>
        </div>
    </div>
    <dialog id="qrModal" class="qr-modal dn ">
        <div class="m-t-10  close-btn">
            <button onclick="closeModal()" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
              </svg></button>
        </div>
        <textarea id="text" hidden>{{ $type }}: {{ $marque }}, modele: {{ $modele }}
    numero de serie: {{ $materiel->N_serie }}
    numero d'inventair: {{ $materiel->N_Inventair }}
    caraceristiques: {{ $materiel->caractéristiques }}
    division: {{ $affictation }}
    date d'aqusition: {{ $materiel->date_aqusition }}</textarea>
        <div id="qrcode" class="m-t-10"></div>
        <div class="dialog-buttons">
            <div class="m-40">
                <button onclick="downloadQR()" class="btn btn-outline-primary m-t-10"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-download" viewBox="0 0 16 16">
                        <path
                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                        <path
                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                    </svg></button>
            </div>
            <div class="btn-group">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-printer" viewBox="0 0 16 16">
                    <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                    <path
                        d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
                </svg></button>
                <div tabindex="-1" aria-hidden="true" role="menu" class="dropdown-menu">
                    <li>
                        <div class="m-40">
                            <button onclick="printImageSmall()" class="btn btn-outline-primary btn-lg btn-block">small</button>
                        </div>
                    </li>
                    <li>
                        <div class="m-40">
                            <button onclick="printImageMedium()" class="btn btn-outline-primary btn-lg btn-block">Medium</button>
                        </div>
                    </li>
                    <li>
                        <div class="m-40">
                            <button onclick="printImageLarge()" class="btn btn-outline-primary btn-lg btn-block">lagre</button>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </dialog>
    <script>
        qrModal = document.getElementById("qrModal");

        function getQRcode() {
            makeCode();
            qrModal.classList.remove("dn")
            qrModal.showModal();

        }

        function downloadQR() {
            var qrcodeDiv = document.getElementById('qrcode');
            var imgElement = qrcodeDiv.getElementsByTagName('img')[0];
            var imgSrc = imgElement.getAttribute('src');

            // Extract the base64-encoded data from the src attribute
            var base64Data = imgSrc.split(',')[1];

            // Create a temporary anchor element
            var link = document.createElement('a');
            link.href = imgSrc;
            link.download = 'QRCodeImage.png';

            // Trigger a click event on the anchor element to initiate the download
            link.click();
        }

        function printImageSmall() {
            printImageWithSize(200);
        }

        function printImageMedium() {
            printImageWithSize(400);
        }

        function printImageLarge() {
            printImageWithSize(600);
        }

        function printImageWithSize(size) {
            var qrcodeDiv = document.getElementById('qrcode');
            var imgElement = qrcodeDiv.getElementsByTagName('img')[0];
            var imgSrc = imgElement.getAttribute('src');

            var printImg = new Image();
            printImg.src = imgSrc;

            var printWindow = window.open('', '_blank');

            printImg.onload = function() {
                // Create a container div for centering the image
                var containerDiv = printWindow.document.createElement('div');

                // Set the container div's style
                containerDiv.style.position = 'fixed';
                containerDiv.style.top = '50%';
                containerDiv.style.left = '50%';
                containerDiv.style.transform = 'translate(-50%, -50%)';
                containerDiv.style.borderRadius = '3rem 0 3rem 3rem';
                containerDiv.style.borderColor = '#0a011fea';
                containerDiv.style.borderWidth = '5px';
                containerDiv.style.borderStyle = 'solid';
                containerDiv.style.padding = '20px';
                containerDiv.style.backgroundColor = '#f0eaff';
                containerDiv.style.width = size + 'px';
                containerDiv.style.height = size + 'px';

                // Create a div to wrap the image
                var imageWrapperDiv = printWindow.document.createElement('div');

                // Set the image wrapper div's style
                imageWrapperDiv.style.display = 'flex';
                imageWrapperDiv.style.justifyContent = 'center';
                imageWrapperDiv.style.width = '100%';
                imageWrapperDiv.style.height = '100%';
                containerDiv.style.backgroundColor = '#f0eaff';

                // Set the image's style
                printImg.style.maxWidth = '100%';
                printImg.style.maxHeight = '100%';

                // Append the image to the image wrapper div
                imageWrapperDiv.appendChild(printImg);

                // Append the image wrapper div to the container div
                containerDiv.appendChild(imageWrapperDiv);

                // Append the container div to the new window
                printWindow.document.body.appendChild(containerDiv);

                // Set CSS properties for printing
                printWindow.document.body.style.backgroundColor = 'white';
                printWindow.document.body.style.margin = '0';

                // Enable background graphics on print
                printWindow.document.body.style.webkitPrintColorAdjust = 'exact';

                printWindow.print();
            };
        }


        function closeModal() {
            qrModal.classList.add("dn")
            qrModal.close();
        }
        qrModal.addEventListener("click", e => {
            const dialogDimensions = qrModal.getBoundingClientRect()
            if (
                e.clientX < dialogDimensions.left ||
                e.clientX > dialogDimensions.right ||
                e.clientY < dialogDimensions.top ||
                e.clientY > dialogDimensions.bottom
            ) {
                closeModal()
            }
        })

        function makeCode() {
            var elText = document.getElementById("text");
            document.getElementById("qrcode").innerHTML = "";
            var qrcode = new QRCode("qrcode", {
                text: elText.value,
                width: 500,
                height: 500,
                colorDark: "#12003f",
                colorLight: "#f0eaff",
                correctLevel: QRCode.CorrectLevel.L
            });
        }
    </script>
@endsection
