using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Drawing;
using KudyStudio; // 引用空间

namespace kudy_admin_template {
    public partial class VerifyImage : System.Web.UI.Page {
        protected void Page_Load(object sender, EventArgs e) {
            CaptchaImage image = CaptchaImage.Create(CaptchaText.Number, Color.FromArgb(234, 237, 244));

            // 保存session
            Session["VerifyCode"] = image.Text;

            // 输出图像
            Response.OutputStream.Write(image.Data, 0, image.Data.Length);
        }
    }
}