<tr>
  <td align="center">
    <table width="90%" border="0" cellspacing="0" cellpadding="0" style="margin-top: 10px; text-align: left;">
      <tbody>
      <tr>
        <td style="height: 20px; font-size: 20px; line-height: 20px;">
          <img width="20" height="20" title="OK" alt="OK"
            src="{{ env('APP_URL') }}/images/check.png"
            style="border:none; max-width: 20px; height: auto; max-height: 20px;"
          />
        </td>
        <td
          style="font-size: 15px; line-height: 18px; padding: 10px 0; font-family:Verdana, Arial, sans-serif; color:#30343f; text-align: left;">
          <span>
            {!! $langSt($params['email_footer']['key']) !!}
            @if(empty($langSt($params['email_footer']['key'])))
              @lang('main.i_have_read_and_agree_to_the')
              <a style="color: #332243" href="{{ env('APP_URL') }}/terms-conditions?setLang={{ $lang }}&redirect=terms-conditions" target="_blank">@lang('main._terms_&_Conditions_')</a>
              @lang('main._and_')
              <a style="color: #332243" href="{{ env('APP_URL') }}/privacy-cookies?setLang={{ $lang }}&redirect=privacy-cookies" target="_blank">@lang('main._privacy_policy_')</a>
            @endif
          </span>
        </td>
      </tr>
      <tr>
        <td style="height: 20px; font-size: 20px; line-height: 20px;">
          @if(($news_updates ?? '') == 'on')
            <img width="20" height="20" title="OK" alt="OK"
              src="{{ env('APP_URL') }}/images/check.png"
              style="border:none; max-width: 20px; height: auto; max-height: 20px; padding-right: 5px"
            />
          @else
            <img width="20" height="20" title="OK" alt="OK"
              src="{{ env('APP_URL') }}/images/no_check.png"
              style="border:none; max-width: 20px; height: auto; max-height: 20px; padding-right: 5px"
            />
          @endif
        </td>
        <td
          style="font-size: 15px; line-height: 18px; padding: 10px 0; font-family:Verdana, Arial, sans-serif; color:#30343f; text-align: left;">
          <span>@lang('main.text_mail_sending')</span>
        </td>
      </tr>
      </tbody>
    </table>
  </td>
</tr>
<tr>
  <td align="center">
    <table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tbody>
      <tr>
        <td
          style="white-space: pre-line;font-size: 13px; font-family:Verdana, Arial, sans-serif; color:#332243; ">

          {!! $langSt($params['mail_text_notifications']['key']) !!}
        </td>
      </tr>

      <tr>
        <td
          style="text-align: center; font-weight: 600;font-size: 14px; line-height: 14px; padding: 10px 0; font-family:Verdana, Arial, sans-serif; color:#332243; text-align: center;">
          <a style="color: #332243" href="{{ env('APP_URL') }}?setLang={{ $lang }}&redirect=/">{{ env('APP_URL_DOMIN') }}</a>
        </td>
      </tr>
      </tbody>
    </table>
  </td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>


</table>

<!--[if gte mso 10]>
</td></tr></table>
<![endif]-->
</td>
</tr>
</table>
</body>
</html>
