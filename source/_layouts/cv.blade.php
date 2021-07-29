<!DOCTYPE html>
<html>
    <head>
        <title>{!! $page->title !!}</title>
        <meta charset="utf-8">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
        <!-- <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="/assets/img/favicon.ico">
        
        <style>
            /* Not separating style from content: I want my CV to be as portable as possible */
            html, table {
                /*font-family: 'Open Sans', sans-serif;*/
                font-family: 'Raleway', sans-serif;
                font-size: .95em;
                background-color: #EFEFEF;
                line-height: 1.3;
            }
            body {
                margin: 0 auto;
                max-width: 960px;
            }

            .title {
                font-size: 3rem;
                margin: 1rem 0 0;
                text-align: center;
            }
            .contact-details {
                display: flex;
                justify-content: space-between;
            }
            .td-divider tr td:first-child {
                font-weight: bold;
                white-space: nowrap;
                padding-right: 10px;
            }
            .td-alignTop tr td:first-child { vertical-align: top; }
            .td-alignRight tr td:first-child { text-align: right; }
            .kopje {font-size: 1.1rem;}
            .paddingBot { padding-bottom: 7px; }
            h2 { padding-top: 10px; }
            a, a:hover, a:visited { color: blue; }
            a:hover {text-decoration: none;}
            .page-break { display: none; }
            .only-print { display: none; }
            .privacy {display: none;}
        </style>
        <style media="print">
                html, table {font-size: .85em;}   
                a {text-decoration: none;}
                body {max-width: none;}
                .no-print, .no-print * { display: none !important; }
                .only-print { display: block !important; }
                .page-break { display: block; page-break-before: always; }
                .privacy {display: block; position: fixed; bottom:0; font-size: .8rem;}
        </style>
    </head>
    <body>
        <h1 class="title">Thomas de Luca</h1>
        <h4 style="text-align: center; margin: 0 0 .8em;">01/03/1993</h4>
        <div class="contact-details">
            <!-- <div><i class='fa fa-fw fa-phone'></i> +39 348 247 3295</div> -->
            <div><i class='fa fa-fw fa-envelope'></i> thomas.de.luca@hotmail.com</div>
            <div><i class='fa fa-fw fa-globe'></i> <a href='https://www.thomasdeluca.nl' target="_blank">thomasdeluca.nl</a></div>
            <div><i class="fa fa-fw fa-github"></i> <a href="https://github.com/megatommy" target="_blank">github.com/megatommy</a></div>
            </div>
        <hr style="border-top-color: #888;" />
    
        <div style="display: flex; justify-content: space-between;">
            <div>
                <h2><i class="fa fa-fw fa-book"></i> {!! $page->education->label !!}</h2>
                <table class="td-divider td-alignRight td-alignTop">
                    @foreach($page->education->entries as $entry)
                    <tr>
                        <td>{!! $entry->time !!}</td>
                        <td class="paddingBot">{!! $entry->field !!}</td>
                    </tr>
                    @endforeach
                </table>
            </div>

            <div>
                <h2><i class='fa fa-fw fa-comments'></i> {!! $page->languages->label !!}</h2>
                <table class="td-divider td-alignRight">
                    @foreach($page->languages->entries as $entry)
                    <tr>
                        <td><span>{!! $entry->label !!}</span></td>
                        <td>{!! $entry->level !!}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        
            
        </div>
        
        <h2><i class="fa fa-fw fa-code"></i> {!! $page->tech->label !!}</h2>
        <table>
            @foreach($page->tech->entries as $key => $val)
            <tr>
                <td><b>{!! $key !!}</b></td>
                <td>{!! $val !!}</td>
            </tr>
            @endforeach
        </table>
        <br />
        <h2><i class='fa fa-fw fa-briefcase'></i> {!! $page->work->label !!}</h2>
        <p><i>{!! $page->work->sublabel !!}</i></p>
        <table class="td-divider td-alignRight td-alignTop">
            @foreach($page->work->entries as $entry)
            <tr>
                <td>{!! $entry->time !!}</td>
                <td class="paddingBot">
                    {!! $entry->place !!}
                    <br /><b>{!! $page->tr_position !!}:</b> {!! $entry->position !!}
                    <br /><b>{!! $page->tr_activities !!}:</b> {!! $entry->activities !!}
                    <br /><b>{!! $page->tr_technologies_used !!}:</b> {!! $entry->technologies !!}
                </td>
            </tr>
            @endforeach
        </table>
<!-- <div class="page-break"></div> -->
        <h2><i class='fa fa-fw fa-graduation-cap'></i> {!! $page->internships->label !!}</h2>
        <table class="td-divider td-alignRight td-alignTop">
            @foreach($page->internships->entries as $entry)
            <tr>
                <td>{!! $entry->time !!}</td>
                <td class="paddingBot">
                    {!! $entry->place !!}
                    <br /><b>{!! $page->tr_position !!}:</b> {!! $entry->position !!}
                    <br /><b>{!! $page->tr_activities !!}:</b> {!! $entry->activities !!}
                    <br /><b>{!! $page->tr_technologies_used !!}:</b> {!! $entry->technologies !!}
                </td>
            </tr>
            @endforeach
        </table>

        <h2><i class='fa fa-fw fa-globe'></i> {!! $page->workaways->label !!}</h2>
        <p><i>{!! $page->workaways->sublabel !!}</i></p>
        <table class="td-divider td-alignRight td-alignTop">
            @foreach($page->workaways->entries as $entry)
            <tr>
                <td>{!! $entry->time !!}</td>
                <td class="paddingBot">
                    {!! $entry->place !!}
                    <br /><b>{!! $page->tr_position !!}:</b> {!! $entry->position !!}
                    <br /><b>{!! $page->tr_activities !!}:</b> {!! $entry->activities !!}
                </td>
            </tr>
            @endforeach
        </table>
        <div class="no-print" style='padding-bottom: 100px;'></div>
        <div class="privacy"><em>{!! $page->gdpr !!}</em></div>
    </body>
</html>
