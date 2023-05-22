<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeDo</title>
    <link rel="icon" type="image/x-icon"
        href="https://th.bing.com/th/id/R.e7e4d800b99f44d0a4a829f5126ca862?rik=JQWcj5P8Ymgwpw&riu=http%3a%2f%2fwedo.russnino.com%2fwp-content%2fuploads%2f2018%2f03%2flogo-1.png&ehk=Beuc%2b0ybW0GoeV6KXIF7GdgrETR38wHIsB%2bRdgp%2fP%2bA%3d&risl=&pid=ImgRaw&r=0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/axios@0.27.0/dist/axios.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.js"
    integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"> --}}
    <style>
        <style>body {
            background-image: url("{{ asset('img/bg1.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: auto;
            position: relative;
        }

        #home {
            background-image: url("{{ asset('img/bg1.jpg') }}");
        }

        #aboutus {
            background-image: url("{{ asset('img/mtrans.png') }}");
        }

        #career {
            background-image: url("{{ asset('img/mtrans.png') }}");
        }

        #contact {
            background-image: url("{{ asset('img/bg1.jpg') }}");
        }

        #listofclients {
            background-image: url("{{ asset('img/mred.png') }}");
        }

        #whyus {
            background-image: url("{{ asset('img/mtrans.png') }}");
        }

        #services {
            background-image: url("{{ asset('img/mtrans.png') }}");
        }
        body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }

        .topnav {
                overflow: hidden;
                background-color: white;
            }

        .topnav a {
                float: right;
                display: block;
                color: black;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

        .topnav a:hover {
                background-color: red;
                color: white ;
            }

        .topnav .icon {
                display: none;
            }
        @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {display: none;}
        .topnav a.icon {
                float: right;
                display: block;
                }     
            }
        @media screen and (max-width: 600px) {
        .topnav.responsive {position: relative;}
        .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
                }
        .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
                }
            }
        
        * {box-sizing: border-box}
        body {font-family: "Lato", sans-serif;}
                
        /* Style the tab */
        .tab {
                float: left;
                border: none;
                background-color: transparent;
                width: 30%;
                height: auto;
            }
        
        /* Style the buttons inside the tab */
        .tab button {
                display: block;
                background-color: transparent;
                color: black;
                padding: 10px;
                width: 100%;
                border: none;
                outline: none;
                text-align: center;
                cursor: pointer;
                font-size: 17px;
            }
        
        /* Change background color of buttons on hover */
        .tab button:hover {
                background-color: red;
                color: white;
            }
        
        /* Create an active/current "tab button" class */
        .tab button.active {
                background-color: red;
            }
        
        /* Style the tab content */
        .tabcontent {
                float: left;
                padding: 0px 12px;
                border: none;
                width: 50%;
                border-left: none;
                height: auto;
                display: none;
            }
        
        /* Clear floats after the tab */
        .clearfix::after {
                content: "";
                clear: both;
                display: table;
            }
    </style>
    <script src="{{ asset('js/welcome.js') }}" defer></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <header id="nav" class="topnav fixed-top nav justify-content-end ml-5 bg-gradient shadow mb-5 bg-body-tertiary" >
                <img src="{{ asset('img/wedo.png') }}" alt="logo" height="50px" href="#home" style="padding-right: 45%">
                        <a href="#home">Home</a>
                        <a href="#aboutus">About Us</a>
                        <a href="#whyus">Why Us?</a>
                        <a href="#services">Services</a>
                        <a href="#listofclients">List of Clients</a>
                        <a href="#career">Career</a>
                        <a href="#contact">Contact</a>
                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                          <i class="fa fa-bars"></i>
                        </a>
                    <script>
                        function myFunction() {
                            var x = document.getElementById("nav");
                                if (x.className === "topnav") {
                                     x.className += " responsive";
                                } else {
                                    x.className = "topnav";
                                }
                            }
                    </script>
            </header>
            <section id="home" class="p-5">
                <div class="container p-5 m-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center m-5">
                                <h1 class="display-5 fw-bolder text-white" id="ViewTitle"
                                    style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                                    </h1>
                                <p class="text-white-50 mb-4" id="ViewPrgph"
                                    style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                                    </p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                    <a class="btn btn-outline-danger btn-sm px-3 text-white" href="#aboutus">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="aboutus" class="p-5">
                <h1 class="text-center display-4 mt-5">ABOUT <label class="text-danger">US</label></h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class=" p-3">
                            <h1 class="text-danger text-center display-5">Company Profile</h1>
                            <p class="p-3 border-start border-danger" style="text-align: justify; text-indent: 10%;">
                                WeDo BPO Inc. is a management consulting company which bridge the gap betwen our
                                client's business needs and proven global resources. WeDo collaborates with its Clients
                                to identify and improve areas from Operations to Sales to Customer Support.
                            <p class="p-3 border-start border-end border-danger" style="text-align: justify; text-indent: 10%;">
                                Together, we combine proven technologues, processes, and skilled resources from
                                around the world to deliver an effective Strategic Sourcing service for our
                                clients.
                            </p>
                            <p class="p-3 border-end border-danger" style="text-align: justify; text-indent: 10%;">
                                Since 2009, WeDo and our Global Partners have been delivering Business Process
                                Improvement Solutions to our clients that range from the small entrepreneur start-ups to
                                the Fortune 1000 companies of the world.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row p-3">
                            <img src="{{ asset('img/about.png') }}" alt="bg" class="rounded mx-auto d-block">
                        </div>
                    </div>
                </div>
            </section>
            <section id="whyus" class="p-5">
                <h1 class="m-5 text-center display-5">Our products and services give the necessary support help you
                    focus on the heart of your business.</h1>
                <div class="row">
                    <div class="col-sm-6 shadow p-3 mb-5 bg-body-tertiary rounded">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i class="fa-sharp fa-light fa-inbox-out"></i></div>
                                <div class="ms-4">
                                    <h3>Outsource Management</h3>
                                    <p class="mb-1">Your custom program is implemented by highly skilled WeDo teams
                                        that are both global and close to home.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"></div>
                                <div class="ms-4">
                                    <h3>Inbound Services</h3>
                                    <p class="mb-1">With our state-of-the-art technology and well-trained inbound
                                        Customer Service Specialist</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"></div>
                                <div class="ms-4">
                                    <h3>Outbound Services</h3>
                                    <p class="mb-1">Let WeDo provide you with valuable marketing support and other
                                        business intelligence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-5">
                        <p style="text-align: justify; text-indent: 10%;" class="lh-lg">WeDo can provide a "Single Point of Contact" 
                        entralized Help Desk that is capable of responding to user requests for problem resolution, 
                        technical assistance, asset movement, changes, installation and maintenance. 
                        Acting as the single point of contact, the Help Desk provides centralized remote support, engagement of on-site staffing requirements and assistance dispatch, 
                        to guarantee that end user request are addressed in a timely manner. This model will be the mechanism to address elements common to the support areas. 
                        It will promote the close linkage between the Customer and WeDo in setting strategies and standards.</p>
                    </div>
                </div>
            </section>
            <section id="services"class="p-5 ">
                <h1 class="text-center display-4 mt-5 mb-5">WHAT CAN <label class="text-danger">WE DO</label>?</h1>
                    <div class="tab mx-auto d-block">
                        <button class="tablinks" onmouseover="openCity(event, 'cbs')">Complete Business Solutions</button>
                        <button class="tablinks" onmouseover="openCity(event, 'mc')">Management Consultancy</button>
                        <button class="tablinks" onmouseover="openCity(event, 'csd')">Custom Software Development</button>
                        <button class="tablinks" onmouseover="openCity(event, 'om')"> Outsource Management</button>
                        <button class="tablinks" onmouseover="openCity(event, 'is')">Inbound Services</button>
                        <button class="tablinks" onmouseover="openCity(event, 'os')">Outbound Services</button>
                        <button class="tablinks" onmouseover="openCity(event, 'sp')"> Selection Process</button>
                        <button class="tablinks" onmouseover="openCity(event, 'omt')">Our Management Team</button>
                        <button class="tablinks" onmouseover="openCity(event, 'csr')"> Customer Service Representative (CSR)</button>
                        <button class="tablinks" onmouseover="openCity(event, 'it')">IT and Technical Support</button>
                        <button class="tablinks" onmouseover="openCity(event, 'wocd')">WeDo Operational and Cost Advantages</button>
                    </div>     
                    <div id="cbs" class="tabcontent">
                        <h3>Complete Business Solutions</h3>
                            <p style="text-align: justify; text-indent: 10%;">We offer dynamic business solutions that
                                fit every business need of any contact center company. Our products and services give
                                the necessary support to help you focus on the heart of your business. With WeDo, you no
                                longer have to pre-occupy yourselves with investing large quantities of your time,
                                energy and most especially, your money into customer related services, equipment and
                                facilities. We will seamlessly maintain, if not better, customer care services that you
                                require and your customer’s demand.</p>
                    </div>
                    <div id="mc" class="tabcontent">
                        <h3>Management Consultancy</h3>
                            <p style="text-align: justify; text-indent: 10%;">At WeDo, our focus is learning your
                                business before anything else. Only after we’ve learned everything there is to know
                                about your business, we will begin the process of identifying possible solutions to
                                improving your bottom lines. Our process of Assessing, Planning and Recommending may
                                seem simple, but there is much industry and process analysis that goes into each of our
                                basic consulting steps.</p>
                    </div>
                    <div id="csd" class="tabcontent">
                        <h3>Custom Software Development</h3>
                            <p style="text-align: justify; text-indent: 5%;">WeDo offers Custom Software Development
                                and Solutions in the areas of Web development, Internet-based systems development,
                                Client-Server Applications and Desktop applications. Accredited by the Philippine
                                Government Electronic Procurement System (PhilGEPS), our portfolio include development
                                of applications for delivering government services, exchange of information,
                                communication transactions, integration of various stand-alone systems and services
                                between government-to-citizen, government-to-business and government-to-government, as
                                well as back office processes and interactions within the entire framework to a number
                                of local and national government units. Since 2009, WeDo BPO has created and implemented
                                numerous information and online transaction processing systems, developed and designed
                                websites, and also conducted trainings for system users and provided technical system
                                support to both the public and private sectors. WeDo BPO strives to provide a complete
                                solution to streamline processes and offer a wide range of software customizations
                                allowing our clients to optimize their business operations. We pride ourselves on being
                                able to understand, interpret, assess and establish the right approach to every client's
                                need</p>
                    </div>
                    <div id="om" class="tabcontent">
                        <h3>Outsource Management</h3>
                            <p style="text-align: justify; text-indent: 10%;">Outsource Management Your custom program
                                is implemented by highly skilled WeDo teams that are both global and close to home. So
                                if your project calls for local home management but global reach, we can help. Our
                                regular monitoring of early successes and challenges ensures we remain fluid and ready
                                to adapt to market forces. By establishing mutually beneficial goals early in the
                                planning process, your project’s implementation can take place without the distraction
                                of conflicting goals or misunderstood objectives.</p>
                    </div>
                    <div id="is" class="tabcontent">
                        <h3>Inbound Services</h3>
                            <p style="text-align: justify; text-indent: 10%;">With our state-of-the-art technology and
                                well-trained inbound Customer Service Specialists, WeDo will help you improve customer
                                satisfaction and provide excellence in customer care, maximize your sales, reduce your
                                operating costs and streamline your operation. WeDo offers full inbound operations,
                                technical, and customer support utilizing online chat, email, and telephone web
                                integration tailored to your company's needs. WeDo offers a wide range of seamless
                                customer management solutions to its clients and their customers. Lists of our Inbound
                                Services are shown below:</p>
                            <li>Customer Service/Technical Support</li>
                            <li>Inbound Sales/Order Taking</li>
                    </div>
                    <div id="os" class="tabcontent">
                        <h3>Outbound Services</h3>
                            <p style="text-align: justify; text-indent: 10%;">Let WeDo provide you with valuable
                                marketing support and other business intelligence. Enhanced web-based tools will be
                                customized to suit your specific needs which will ensure that all outbound transactions
                                are documented, detailed and audited, accessible online and in real-time. We provide
                                dedicated, sales-skilled, knowledgeable, and highly trained outbound Telephone Sales
                                Representatives for your outbound requirements, so you can receive reliable service
                                consistently throughout the term of your programs. WeDo offers a wide range of effective
                                outbound solutions to its clients. Lists of our Outbound Services are shown below:</p>
                            <li>Lead Generation</li>
                            <li>Data Collection</li>
                            <li>Market Research/Survey</li>
                            <li>Target Direct Sales/Telemarketing</li>
                    </div>
                    <div id="sp" class="tabcontent">
                        <h3>Selection Process</h3>
                            <p style="text-align: justify; text-indent: 10%;">We believe that ethics and philosophies
                                of a business reflect the traits of its management team, and consequently, we carefully
                                examine each global partner’s management team. Education backgrounds, industry
                                reputation and HR practices are scrutinized and challenged. These interviews are
                                conducted in person by our US team on a consistent basis.</p>
                            <p>Once the management team passes muster, we consider agent training & development, the IT
                                capabilities & strengths, and sales reporting / compliance methods of each global
                                partner before your sales or BPO project is implemented.</p>
                    </div>
                    <div id="omt" class="tabcontent">
                        <h3>Our Management Team</h3>
                            <p style="text-align: justify; text-indent: 10%;">Our management team is a group of
                                proactive, credible, knowledgeable, decisive and responsible leaders capable of
                                instigating change, recognizing and seizing opportunities that maximize the company’s
                                opportunities for growth and development. We feel the frequent and open communication is
                                key to a successful relationship. Our Management Team is in place to provide you with
                                the service level you deserve.</p>
                    </div>
                    <div id="csr" class="tabcontent">
                        <h3>Customer Service Representatives (CSR)</h3>
                            <p style="text-align: justify; text-indent: 10%;">The Customer Service Representatives are
                                engaging, enthusiastic people capable of handling high-level problems. They are college
                                educated service specialists who are carefully screened and selected based on their
                                excellent verbal and written English communication, computer and technical skills,
                                customer service orientation and personality. Experienced and highly qualified trainers,
                                with a proven record in customer service, conduct both classroom and rigorous hands-on
                                training. Our CSR’s complete training thoroughly prepares them know your business and
                                handle even the most demanding of customers. Our advanced technology and
                                state-of-the-art equipment make it easy for our CSR’s to do their job. WeDo CSR’s
                                resolve your customers' issues effectively and efficiently, due to our web-based CRM.
                            </p>
                    </div>
                    <div id="it" class="tabcontent">
                        <h3>IT and Technical Support</h3>
                            <p style="text-align: justify; text-indent: 10%;">WeDo employs a highly skilled in-house
                                technical support team to oversee all aspects of our contact center’s infrastructure.
                                The IT department may be staffed 24x7 to ensure your project is running smoothly. Our
                                careful monitoring and escalation procedures ensure virtually no project downtime.</p>
                    </div>
                    <div id="wocd" class="tabcontent">
                        <h3>WeDo Operational and Cost Advantages</h2>
                            <li>Hard Working, Highly Trained and Qualified Personnel</li>
                            <li>Potential to increase the Number of Agents at Current Costs</li>
                            <li>Low Turnover of Personnel</li>
                            <li>Skilled and Knowledgeable Management</li>
                            <li>24 hours a day, 7 days a week IT support</li>
                            <li>Potential to Operate 24 hours a day, 365 days a year</li>
                            <li>No Excessive Front-End Capital Investment</li>
                            <li>No Capital Investment for Upgrades in Software</li>
                            <li>Cut Personnel Costs – In Salaries, Benefits, and Management Staff</li>
                            <li>No Worrying over Telecommunications Costs</li>
                    </div>
                    <div class="clearfix"></div>
                    <script>
                    function openCity(evt, cityName) {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("tabcontent");
                        for (i = 0; i < tabcontent.length; i++) {
                          tabcontent[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablinks");
                        for (i = 0; i < tablinks.length; i++) {
                          tablinks[i].className = tablinks[i].className.replace(" active", "");
                        }
                        document.getElementById(cityName).style.display = "block";
                        evt.currentTarget.className += " active";
                    }
                    </script>
                <!-- <div class="row">
                    <div class="col-sm-6 text-end">
                        <button class="btn btn-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                            Complete Business Solutions
                        </button><br>
                        <button class="btn btn-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                            Management Consultancy
                        </button><br>
                        <button class="btn btn-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                            Custom Software Development
                        </button><br>
                        <button class="btn btn-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                            Outsource Management
                        </button><br>
                        <button class="btn btn-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
                            Inbound Services
                        </button><br>
                        <button class="btn btn-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">
                            Outbound Services
                        </button><br>
                        <button class="btn btn-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample">
                            Selection Process
                        </button><br>
                        <button class="btn btn-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample8" aria-expanded="false" aria-controls="collapseExample">
                            Our Management Team
                        </button><br>
                        <button class="btn btn-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample9" aria-expanded="false" aria-controls="collapseExample">
                            Customer Service Representative (CSR)
                        </button><br>
                        <button class="btn btn-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample11" aria-expanded="false" aria-controls="collapseExample">
                            IT and Technical Support
                        </button><br>
                        <button class="btn btn-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample12" aria-expanded="false" aria-controls="collapseExample">
                            WeDo Operational and Cost Advantages
                        </button><br>
                    </div>
                    <div class="col-sm-6">
                        <div class="" id="collapseExample1">
                            <div class="bg-transparent shadow p-3 bg-body-tertiary rounded">
                                <h3>Complete Business Solutions</h3>
                                <p style="text-align: justify; text-indent: 10%;">We offer dynamic business solutions that
                                    fit every business need of any contact center company. Our products and services give
                                    the necessary support to help you focus on the heart of your business. With WeDo, you no
                                    longer have to pre-occupy yourselves with investing large quantities of your time,
                                    energy and most especially, your money into customer related services, equipment and
                                    facilities. We will seamlessly maintain, if not better, customer care services that you
                                    require and your customer’s demand.</p>
                            </div>
                        </div><br>
                        <div class="collapse" id="collapseExample2">
                            <div class="bg-transparent shadow p-3 bg-body-tertiary rounded">
                                <h3>Management Consultancy</h3>
                                <p style="text-align: justify; text-indent: 10%;">At WeDo, our focus is learning your
                                    business before anything else. Only after we’ve learned everything there is to know
                                    about your business, we will begin the process of identifying possible solutions to
                                    improving your bottom lines. Our process of Assessing, Planning and Recommending may
                                    seem simple, but there is much industry and process analysis that goes into each of our
                                    basic consulting steps.</p>
                            </div>
                        </div><br>
                        <div class="collapse" id="collapseExample3">
                            <div class="bg-transparent shadow p-3 bg-body-tertiary rounded">
                                <h3>Custom Software Development</h3>
                                <p style="text-align: justify; text-indent: 10%;">WeDo offers Custom Software Development
                                    and Solutions in the areas of Web development, Internet-based systems development,
                                    Client-Server Applications and Desktop applications. Accredited by the Philippine
                                    Government Electronic Procurement System (PhilGEPS), our portfolio include development
                                    of applications for delivering government services, exchange of information,
                                    communication transactions, integration of various stand-alone systems and services
                                    between government-to-citizen, government-to-business and government-to-government, as
                                    well as back office processes and interactions within the entire framework to a number
                                    of local and national government units. Since 2009, WeDo BPO has created and implemented
                                    numerous information and online transaction processing systems, developed and designed
                                    websites, and also conducted trainings for system users and provided technical system
                                    support to both the public and private sectors. WeDo BPO strives to provide a complete
                                    solution to streamline processes and offer a wide range of software customizations
                                    allowing our clients to optimize their business operations. We pride ourselves on being
                                    able to understand, interpret, assess and establish the right approach to every client's
                                    need</p>
                            </div>
                        </div><br>
                        <div class="collapse" id="collapseExample4">
                            <div class="bg-transparent shadow p-3 bg-body-tertiary rounded">
                                <h3>Outsource Management</h3>
                                <p style="text-align: justify; text-indent: 10%;">Outsource Management Your custom program
                                    is implemented by highly skilled WeDo teams that are both global and close to home. So
                                    if your project calls for local home management but global reach, we can help. Our
                                    regular monitoring of early successes and challenges ensures we remain fluid and ready
                                    to adapt to market forces. By establishing mutually beneficial goals early in the
                                    planning process, your project’s implementation can take place without the distraction
                                    of conflicting goals or misunderstood objectives.</p>
                            </div>
                        </div><br>
                        <div class="collapse" id="collapseExample5">
                            <div class="bg-transparent shadow p-3 bg-body-tertiary rounded">
                                <h3>Inbound Services</h3>
                                <p style="text-align: justify; text-indent: 10%;">With our state-of-the-art technology and
                                    well-trained inbound Customer Service Specialists, WeDo will help you improve customer
                                    satisfaction and provide excellence in customer care, maximize your sales, reduce your
                                    operating costs and streamline your operation. WeDo offers full inbound operations,
                                    technical, and customer support utilizing online chat, email, and telephone web
                                    integration tailored to your company's needs. WeDo offers a wide range of seamless
                                    customer management solutions to its clients and their customers. Lists of our Inbound
                                    Services are shown below:</p>
                                <li>Customer Service/Technical Support</li>
                                <li>Inbound Sales/Order Taking</li>
                            </div>
                        </div><br>
                        <div class="collapse" id="collapseExample6">
                            <div class="bg-transparent shadow p-3 bg-body-tertiary rounded">
                                <h3>Outbound Services</h3>
                                <p style="text-align: justify; text-indent: 10%;">Let WeDo provide you with valuable
                                    marketing support and other business intelligence. Enhanced web-based tools will be
                                    customized to suit your specific needs which will ensure that all outbound transactions
                                    are documented, detailed and audited, accessible online and in real-time. We provide
                                    dedicated, sales-skilled, knowledgeable, and highly trained outbound Telephone Sales
                                    Representatives for your outbound requirements, so you can receive reliable service
                                    consistently throughout the term of your programs. WeDo offers a wide range of effective
                                    outbound solutions to its clients. Lists of our Outbound Services are shown below:</p>
                                <li>Lead Generation</li>
                                <li>Data Collection</li>
                                <li>Market Research/Survey</li>
                                <li>Target Direct Sales/Telemarketing</li>
                            </div>
                        </div><br>
                        <div class="collapse" id="collapseExample7">
                            <div class="bg-transparent shadow p-3 bg-body-tertiary rounded">
                                <h3>Selection Process</h3>
                                <p style="text-align: justify; text-indent: 10%;">We believe that ethics and philosophies
                                    of a business reflect the traits of its management team, and consequently, we carefully
                                    examine each global partner’s management team. Education backgrounds, industry
                                    reputation and HR practices are scrutinized and challenged. These interviews are
                                    conducted in person by our US team on a consistent basis.</p>
                                <p>Once the management team passes muster, we consider agent training & development, the IT
                                    capabilities & strengths, and sales reporting / compliance methods of each global
                                    partner before your sales or BPO project is implemented.</p>
                            </div>
                        </div><br>
                        <div class="collapse" id="collapseExample8">
                            <div class="bg-transparent shadow p-3 bg-body-tertiary rounded">
                                <h3>Our Management Team</h3>
                                <p style="text-align: justify; text-indent: 10%;">Our management team is a group of
                                    proactive, credible, knowledgeable, decisive and responsible leaders capable of
                                    instigating change, recognizing and seizing opportunities that maximize the company’s
                                    opportunities for growth and development. We feel the frequent and open communication is
                                    key to a successful relationship. Our Management Team is in place to provide you with
                                    the service level you deserve.</p>
                            </div>
                        </div><br>
                        <div class="collapse" id="collapseExample9">
                            <div class="bg-transparent shadow p-3 bg-body-tertiary rounded">
                                <h3>Customer Service Representatives (CSR)</h3>
                                <p style="text-align: justify; text-indent: 10%;">The Customer Service Representatives are
                                    engaging, enthusiastic people capable of handling high-level problems. They are college
                                    educated service specialists who are carefully screened and selected based on their
                                    excellent verbal and written English communication, computer and technical skills,
                                    customer service orientation and personality. Experienced and highly qualified trainers,
                                    with a proven record in customer service, conduct both classroom and rigorous hands-on
                                    training. Our CSR’s complete training thoroughly prepares them know your business and
                                    handle even the most demanding of customers. Our advanced technology and
                                    state-of-the-art equipment make it easy for our CSR’s to do their job. WeDo CSR’s
                                    resolve your customers' issues effectively and efficiently, due to our web-based CRM.
                                </p>
                            </div>
                        </div><br>
                        <div class="collapse" id="collapseExample11">
                            <div class="bg-transparent shadow p-3 bg-body-tertiary rounded">
                                <h3>IT and Technical Support</h3>
                                <p style="text-align: justify; text-indent: 10%;">WeDo employs a highly skilled in-house
                                    technical support team to oversee all aspects of our contact center’s infrastructure.
                                    The IT department may be staffed 24x7 to ensure your project is running smoothly. Our
                                    careful monitoring and escalation procedures ensure virtually no project downtime.</p>
                            </div>
                        </div><br>
                        <div class="collapse" id="collapseExample12">
                            <div class="bg-transparent shadow p-3 bg-body-tertiary rounded">
                                <h3>WeDo Operational and Cost Advantages</h2>
                                    <li>Hard Working, Highly Trained and Qualified Personnel</li>
                                    <li>Potential to increase the Number of Agents at Current Costs</li>
                                    <li>Low Turnover of Personnel</li>
                                    <li>Skilled and Knowledgeable Management</li>
                                    <li>24 hours a day, 7 days a week IT support</li>
                                    <li>Potential to Operate 24 hours a day, 365 days a year</li>
                                    <li>No Excessive Front-End Capital Investment</li>
                                    <li>No Capital Investment for Upgrades in Software</li>
                                    <li>Cut Personnel Costs – In Salaries, Benefits, and Management Staff</li>
                                    <li>No Worrying over Telecommunications Costs</li>
                            </div>
                        </div>
                    </div>
                </div> -->
            </section>
            <section id="listofclients" class="p-5">
                <h1 class="text-center display-4 mt-3">LIST OF <label class="text-danger">CLIENTS</label></h1>
                    <div class="row mt-5" >
                        <div class="col-lg-3">
                            <a target="_blank" href="http://anakalusugan.com.ph/">
                                <img src="{{ asset('logo/Anakalusugan.png') }}" alt="logo1" style="height: 120px;" class="mx-auto d-block">
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a target="_blank" href="https://www.facebook.com/STOTOMASLGU/">
                                <img src="{{ asset('logo/tomas.png') }}" alt="logo2" style="height: 120px;" class="mx-auto d-block">
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a target="_blank" href="https://www.facebook.com/lipacityofficial/?">
                                <img src="{{ asset('logo/lipa.png') }}" alt="logo3" style="height: 120px;" class="mx-auto d-block">
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a target="_blank" href="">
                                <img src="{{ asset('logo/nfi.png') }}" alt="logo4" style="height: 120px;" class="mx-auto d-block">
                            </a>
                        </div>
                    </div>
                    <div class="row mb-5 mt-5">
                        <div class="col-lg-3 ms-0">
                            <a target="_blank" href="https://en.wikipedia.org/wiki/Philippine_Charity_Sweepstakes_Office">
                                <img src="{{ asset('logo/pcso.png') }}" alt="logo3" style="height: 120px;" class="mx-auto d-block">
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a target="_blank" href="https://accuteqs.com.ph/about-us/">
                                <img src="{{ asset('logo/accuteqs.jpg') }}" alt="logo5" style="height: 120px;" class="mx-auto d-block">
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a target="_blank" href="https://www.facebook.com/BauanPlazaHotel/">
                                <img src="{{ asset('logo/hotel.png') }}" alt="logo5" style="height: 120px;" class="mx-auto d-block">
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a target="_blank" href="https://btgholdings.com/">
                                <img src="{{ asset('logo/btg.png') }}" alt="logo11" style="height: 100px;" class="mx-auto d-block">
                            </a>
                        </div>
                    </div>
                    <div class="row mb-5 mt-5">
                        <div class="col-lg-4">
                            <a target="_blank" href="https://www.sierrapinesbaguio.com/">
                                <img src="{{ asset('logo/sierra.png') }}" alt="logo6" style="height: 120px;" class="mx-auto d-block">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a target="_blank" href="https://www.clickthecity.com/food-drink/b/lH705c3/shawarma-bros-venice-grand-canal-mall">
                                <img src="{{ asset('logo/shawarma.jpg') }}" alt="logo7" style="height: 120px;" class="mx-auto d-block">
                            </a>    
                        </div>
                        <div class="col-lg-4">
                            <a target="_blank" href="">
                                <img src="{{ asset('logo/hbi.png') }}" alt="logo5" style="height: 180px;" class="mx-auto d-block">
                            </a>
                        </div>
                    </div>
            </section>
            <section id="career" class="p-5">
                <h1 class="text-center display-4 mt-5">WORK AND BE <label class="text-danger">YOURSELF!</label></h1>
                <p class="text-center">We're fearless collaborators, and we're looking for people with the skills and
                    ambition to make us even better.</p>

                    <div class="accordion p-5" id="accordionPanelsStayOpenExample">

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              TItle of position
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <p class="fs-5">JD</p>
                                <div class="col">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>


                                <p class="fs-5">Skills</p>
                                <div class="col">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                              
                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                              <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                TItle of position
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingOne">
                              <div class="accordion-body">
                                  <p class="fs-5">JD</p>
                                  <div class="col">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                  </div>
  
  
                                  <p class="fs-5">Skills</p>
                                  <div class="col">
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                  </div>
                                
                              </div>
                            </div>
                          </div>
  

                    </div>
          
            </section>
            <section id="contact" class="p-5">
                <h1 class="text-center text-white display-3 mt-3">CONTACT US</h1>
                    <div class="row">
                        <div class="col-lg-6 p-5 mt-3">
                            <div>
                                <h6 class="text-start text-white">Unit 1901, Antel Global Corporate Center #3 Dona Julia Vargas Avenue, San Antonio, Ortigas Center, Pasig City, 1605 Metro Manila</h6>
                            </div><br>
                            <div>
                                <h6 class="text-white">+63 (02) 084704131</h6>
                            </div><br>
                            <div>
                                <h6 class="text-white">Email: sysad@wedo.inc.ph</h6>     
                            </div><br>
                            <div>
                                <a href="https://www.facebook.com/WeDoBPO" class="text-white"> Facebook: https://www.facebook.com/WeDoBPO</a>
                            </div><br>
                            <div>
                                <a href="https://instagram.com/wedobpo?" class="text-white">Instagram: https://instagram.com/wedobpo?</a>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5">
                            <form method="POST" action="{{ url('/submit-form') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="text-white">Your Name:</label>
                                    <input type="text" class="form-control" id="pwd" placeholder="Enter Your Name" name="name" required>
                                </div>    
                                <div class="mb-3 mt-3">
                                    <label for="email" class="text-white">Your Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
                                </div>                               
                                <div class="mb-3 mt-3">
                                    <label for="comment" class="text-white">Message:</label>
                                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                                </div>
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </form>
                        </div>
                    </div>
                    <h5 class="text-danger text-white text-center mt-5">© 2023 WeDo BPO. All Rights Reserved
                    </h5>       
            </section>
        </div> 
    </div>
</body>

</html>
