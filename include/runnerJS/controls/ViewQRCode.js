
Runner.viewControls.ViewQRCode=Runner.extend(Runner.viewControls.ViewControl,{qr_width:128,qr_height:128,constructor:function(cfg){Runner.viewControls.ViewQRCode.superclass.constructor.call(this,cfg);if(typeof cfg.qr_width!=="undefined")this.qr_width=cfg.qr_width;if(typeof cfg.qr_height!=="undefined")this.qr_height=cfg.qr_height;},init:function(){var qr_width=this.qr_width,qr_height=this.qr_height;$("span[id*='qrcode_']",this.pageContext).each(function(){var text=$(this).attr('value');if(text&&!$(this).html()){$(this).qrcode({width:qr_width,height:qr_height,text:text});}});}});