<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* api/index.html.twig */
class __TwigTemplate_9657c11e41044d6cc9fab143a5150190657e1a32cb4bd7a188f668a2084437eb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"UTF-8\">
    <title>API</title>

    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\" integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\" crossorigin=\"anonymous\"></script>
</head>

    <b style=\"font-size: 25px; color: red;\">Result: </b><strong></strong>

    <br><br>

    <button id=\"all_users\">所有用戶</button>

    <br><br>

    <input id=\"one_id\" placeholder=\"輸入用戶ID\">
    <button id=\"userID\">找某用戶</button>

    <br><br>

    <button id=\"all_users_detail\">所有用戶的明細</button>

    <br><br>

    <input id=\"two_id\" placeholder=\"輸入用戶ID\">
    <button id=\"user_details\">找某用戶的明細</button>

    <br><br>

    <input id=\"three_id\" placeholder=\"輸入username\">
    <input id=\"four_id\" placeholder=\"輸入password\">
    <button id=\"user_create\">新增用戶</button>

    <br><br>

    <input id=\"five_id\" placeholder=\"輸入username\">
    <input id=\"six_id\" placeholder=\"輸入password\">
    <button id=\"user_update\">更新用戶密碼</button>

    <br><br>

    <input id=\"seven_id\" placeholder=\"輸入username\">
    <button id=\"user_delete\">刪除用戶</button>

    <br><br>

    <input id=\"eight_id\" placeholder=\"輸入用戶ID\">
    <input id=\"nine_id\" placeholder=\"輸入存入金額\">
    <input id=\"ten_id\" placeholder=\"輸入註記(可選)\">
    <button id=\"action_deposit\">存入</button>

    <br><br>

    <input id=\"eleven_id\" placeholder=\"輸入用戶ID\">
    <input id=\"twelve_id\" placeholder=\"輸入提出金額\">
    <input id=\"thirteen_id\" placeholder=\"輸入註記(可選)\">
    <button id=\"action_withdrawal\">提出</button>

    <br><br>

    <input id=\"fourteen_id\" placeholder=\"輸入明細ID\">
    <input id=\"fifteen_id\" placeholder=\"輸入註記(可選)\">
    <button id=\"action_update\">更新註記</button>

    <script>
        \$(\"#all_users\").click(function() {
            \$.ajax({
               url: 'users/show',
                type: 'POST',
                success: function(msg) {
                   \$(\"strong\").html(JSON.stringify(msg));
                }
            });
        });


        \$(\"#userID\").click(function() {
            var id = \$(\"#one_id\").val();

            \$.ajax({
                url: 'user/show/'+id,
                type: 'POST',
                statusCode: {
                    404: function() {
                        \$(\"strong\").html('請輸入ID');
                    }
                },
                success: function(msg) {
                    \$(\"strong\").html(JSON.stringify(msg));
                }
            });
        });

        \$(\"#all_users_detail\").click(function() {
            \$.ajax({
                url: 'details/show',
                type: 'POST',
                success: function(msg) {
                    \$(\"strong\").html(JSON.stringify(msg));
                }
            });
        });

        \$(\"#user_details\").click(function() {
            var id = \$(\"#two_id\").val();

            \$.ajax({
                url: 'user_details/show/'+id,
                type: 'POST',
                statusCode: {
                    404: function() {
                        \$(\"strong\").html('請輸入ID');
                    }
                },
                success: function(msg) {
                    \$(\"strong\").html(JSON.stringify(msg));
                }
            });
        });

        \$(\"#user_create\").click(function() {
            var username = \$(\"#three_id\").val();
            var password = \$(\"#four_id\").val();

            \$.ajax({
                url: 'user/create/'+username+'/'+password,
                type: 'POST',
                success: function(msg) {
                    \$(\"strong\").html(JSON.stringify(msg));
                }
            });
        });

        \$(\"#user_update\").click(function() {
            var username = \$(\"#five_id\").val();
            var password = \$(\"#six_id\").val();

            \$.ajax({
                url: 'user/update/'+username+'/'+password,
                type: 'POST',
                success: function(msg) {
                    \$(\"strong\").html(JSON.stringify(msg));
                }
            });
        });

        \$(\"#user_delete\").click(function() {
            var username = \$(\"#seven_id\").val();

            \$.ajax({
                url: 'user/delete/'+username,
                type: 'POST',
                success: function(msg) {
                    \$(\"strong\").html(JSON.stringify(msg));
                }
            });
        });

        \$(\"#action_deposit\").click(function() {
            var id = \$(\"#eight_id\").val();
            var money = \$(\"#nine_id\").val();
            var remark = \$(\"#ten_id\").val();

            if (remark) {
                \$.ajax({
                    url: 'action/deposit/new/'+id+'/'+money+'/'+remark,
                    type: 'POST',
                    success: function(msg) {
                        \$(\"strong\").html(JSON.stringify(msg));
                    }
                });
            }else{
                \$.ajax({
                    url: 'action/deposit/new/'+id+'/'+money,
                    type: 'POST',
                    success: function(msg) {
                        \$(\"strong\").html(JSON.stringify(msg));
                    }
                });
            }
        });

        \$(\"#action_withdrawal\").click(function() {
            var id = \$(\"#eleven_id\").val();
            var money = \$(\"#twelve_id\").val();
            var remark = \$(\"#thirteen_id\").val();

            if (remark) {
                \$.ajax({
                    url: 'action/withdrawal/new/'+id+'/'+money+'/'+remark,
                    type: 'POST',
                    success: function(msg) {
                        \$(\"strong\").html(JSON.stringify(msg));
                    }
                });
            }else{
                \$.ajax({
                    url: 'action/withdrawal/new/'+id+'/'+money,
                    type: 'POST',
                    success: function(msg) {
                        \$(\"strong\").html(JSON.stringify(msg));
                    }
                });
            }
        });

        \$(\"#action_update\").click(function() {
            var id = \$(\"#fourteen_id\").val();
            var remark = \$(\"#fifteen_id\").val();

            if (remark) {
                \$.ajax({
                    url: 'action/update/'+id+'/'+remark,
                    type: 'POST',
                    success: function(msg) {
                        \$(\"strong\").html(JSON.stringify(msg));
                    }
                });
            }else{
                \$.ajax({
                    url: 'action/update/'+id,
                    type: 'POST',
                    success: function(msg) {
                        \$(\"strong\").html(JSON.stringify(msg));
                    }
                });
            }
        });
    </script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "api/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"UTF-8\">
    <title>API</title>

    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\" integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\" crossorigin=\"anonymous\"></script>
</head>

    <b style=\"font-size: 25px; color: red;\">Result: </b><strong></strong>

    <br><br>

    <button id=\"all_users\">所有用戶</button>

    <br><br>

    <input id=\"one_id\" placeholder=\"輸入用戶ID\">
    <button id=\"userID\">找某用戶</button>

    <br><br>

    <button id=\"all_users_detail\">所有用戶的明細</button>

    <br><br>

    <input id=\"two_id\" placeholder=\"輸入用戶ID\">
    <button id=\"user_details\">找某用戶的明細</button>

    <br><br>

    <input id=\"three_id\" placeholder=\"輸入username\">
    <input id=\"four_id\" placeholder=\"輸入password\">
    <button id=\"user_create\">新增用戶</button>

    <br><br>

    <input id=\"five_id\" placeholder=\"輸入username\">
    <input id=\"six_id\" placeholder=\"輸入password\">
    <button id=\"user_update\">更新用戶密碼</button>

    <br><br>

    <input id=\"seven_id\" placeholder=\"輸入username\">
    <button id=\"user_delete\">刪除用戶</button>

    <br><br>

    <input id=\"eight_id\" placeholder=\"輸入用戶ID\">
    <input id=\"nine_id\" placeholder=\"輸入存入金額\">
    <input id=\"ten_id\" placeholder=\"輸入註記(可選)\">
    <button id=\"action_deposit\">存入</button>

    <br><br>

    <input id=\"eleven_id\" placeholder=\"輸入用戶ID\">
    <input id=\"twelve_id\" placeholder=\"輸入提出金額\">
    <input id=\"thirteen_id\" placeholder=\"輸入註記(可選)\">
    <button id=\"action_withdrawal\">提出</button>

    <br><br>

    <input id=\"fourteen_id\" placeholder=\"輸入明細ID\">
    <input id=\"fifteen_id\" placeholder=\"輸入註記(可選)\">
    <button id=\"action_update\">更新註記</button>

    <script>
        \$(\"#all_users\").click(function() {
            \$.ajax({
               url: 'users/show',
                type: 'POST',
                success: function(msg) {
                   \$(\"strong\").html(JSON.stringify(msg));
                }
            });
        });


        \$(\"#userID\").click(function() {
            var id = \$(\"#one_id\").val();

            \$.ajax({
                url: 'user/show/'+id,
                type: 'POST',
                statusCode: {
                    404: function() {
                        \$(\"strong\").html('請輸入ID');
                    }
                },
                success: function(msg) {
                    \$(\"strong\").html(JSON.stringify(msg));
                }
            });
        });

        \$(\"#all_users_detail\").click(function() {
            \$.ajax({
                url: 'details/show',
                type: 'POST',
                success: function(msg) {
                    \$(\"strong\").html(JSON.stringify(msg));
                }
            });
        });

        \$(\"#user_details\").click(function() {
            var id = \$(\"#two_id\").val();

            \$.ajax({
                url: 'user_details/show/'+id,
                type: 'POST',
                statusCode: {
                    404: function() {
                        \$(\"strong\").html('請輸入ID');
                    }
                },
                success: function(msg) {
                    \$(\"strong\").html(JSON.stringify(msg));
                }
            });
        });

        \$(\"#user_create\").click(function() {
            var username = \$(\"#three_id\").val();
            var password = \$(\"#four_id\").val();

            \$.ajax({
                url: 'user/create/'+username+'/'+password,
                type: 'POST',
                success: function(msg) {
                    \$(\"strong\").html(JSON.stringify(msg));
                }
            });
        });

        \$(\"#user_update\").click(function() {
            var username = \$(\"#five_id\").val();
            var password = \$(\"#six_id\").val();

            \$.ajax({
                url: 'user/update/'+username+'/'+password,
                type: 'POST',
                success: function(msg) {
                    \$(\"strong\").html(JSON.stringify(msg));
                }
            });
        });

        \$(\"#user_delete\").click(function() {
            var username = \$(\"#seven_id\").val();

            \$.ajax({
                url: 'user/delete/'+username,
                type: 'POST',
                success: function(msg) {
                    \$(\"strong\").html(JSON.stringify(msg));
                }
            });
        });

        \$(\"#action_deposit\").click(function() {
            var id = \$(\"#eight_id\").val();
            var money = \$(\"#nine_id\").val();
            var remark = \$(\"#ten_id\").val();

            if (remark) {
                \$.ajax({
                    url: 'action/deposit/new/'+id+'/'+money+'/'+remark,
                    type: 'POST',
                    success: function(msg) {
                        \$(\"strong\").html(JSON.stringify(msg));
                    }
                });
            }else{
                \$.ajax({
                    url: 'action/deposit/new/'+id+'/'+money,
                    type: 'POST',
                    success: function(msg) {
                        \$(\"strong\").html(JSON.stringify(msg));
                    }
                });
            }
        });

        \$(\"#action_withdrawal\").click(function() {
            var id = \$(\"#eleven_id\").val();
            var money = \$(\"#twelve_id\").val();
            var remark = \$(\"#thirteen_id\").val();

            if (remark) {
                \$.ajax({
                    url: 'action/withdrawal/new/'+id+'/'+money+'/'+remark,
                    type: 'POST',
                    success: function(msg) {
                        \$(\"strong\").html(JSON.stringify(msg));
                    }
                });
            }else{
                \$.ajax({
                    url: 'action/withdrawal/new/'+id+'/'+money,
                    type: 'POST',
                    success: function(msg) {
                        \$(\"strong\").html(JSON.stringify(msg));
                    }
                });
            }
        });

        \$(\"#action_update\").click(function() {
            var id = \$(\"#fourteen_id\").val();
            var remark = \$(\"#fifteen_id\").val();

            if (remark) {
                \$.ajax({
                    url: 'action/update/'+id+'/'+remark,
                    type: 'POST',
                    success: function(msg) {
                        \$(\"strong\").html(JSON.stringify(msg));
                    }
                });
            }else{
                \$.ajax({
                    url: 'action/update/'+id,
                    type: 'POST',
                    success: function(msg) {
                        \$(\"strong\").html(JSON.stringify(msg));
                    }
                });
            }
        });
    </script>
</body>
</html>
", "api/index.html.twig", "/var/www/project/templates/api/index.html.twig");
    }
}
