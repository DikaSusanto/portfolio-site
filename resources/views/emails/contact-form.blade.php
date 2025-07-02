<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>New Contact Form Submission</title>
</head>

<body
  style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif; background-color: #f5f5f5; line-height: 1.6;">
  <!-- Main Container -->
  <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #f5f5f5; padding: 20px 0;">
    <tr>
      <td align="center">
        <table cellpadding="0" cellspacing="0" border="0" width="600"
          style="max-width: 600px; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">

          <!-- Header -->
          <tr>
            <td style="background-color: #2d3748; padding: 24px 32px; text-align: center;">
              <h1 style="margin: 0; color: #ffffff; font-size: 20px; font-weight: 600;">
                New Contact Submission
              </h1>
              <p style="margin: 8px 0 0 0; color: #cbd5e0; font-size: 14px;">
                Portfolio Contact Form
              </p>
            </td>
          </tr>

          <!-- Content -->
          <tr>
            <td style="padding: 32px;">

              <!-- Contact Info -->
              <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 24px;">
                <p
                  style="margin: 0 0 8px 0; font-size: 12px; font-weight: 600; color: #a0aec0; text-transform: uppercase; letter-spacing: 0.5px;">
                  Contact Details
                </p>
                <tr>
                  <td
                    style="padding: 16px; background-color: #f7fafc; border-left: 3px solid #4a5568; border-radius: 4px;">
                    <h3 style="margin: 0 0 8px 0; font-size: 16px; font-weight: 600; color: #2d3748;">
                      {{ $contactData['name'] }}
                    </h3>
                    <p style="margin: 0; font-size: 14px; color: #718096;">
                      {{ $contactData['email'] }}
                    </p>
                  </td>
                </tr>
              </table>

              <!-- Subject -->
              <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 24px;">
                <tr>
                  <td>
                    <p
                      style="margin: 0 0 8px 0; font-size: 12px; font-weight: 600; color: #a0aec0; text-transform: uppercase; letter-spacing: 0.5px;">
                      Subject
                    </p>
                    <h2 style="margin: 0; font-size: 18px; font-weight: 600; color: #2d3748;">
                      {{ $contactData['subject'] }}
                    </h2>
                  </td>
                </tr>
              </table>

              <!-- Message -->
              <table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom: 24px;">
                <tr>
                  <td>
                    <p
                      style="margin: 0 0 12px 0; font-size: 12px; font-weight: 600; color: #a0aec0; text-transform: uppercase; letter-spacing: 0.5px;">
                      Message
                    </p>
                    <div
                      style="background-color: #f7fafc; padding: 20px; border-radius: 4px; border-left: 3px solid #cbd5e0;">
                      <p
                        style="margin: 0; font-size: 15px; color: #4a5568; line-height: 1.6; white-space: pre-line; text-align: justify;">
                        {{ trim($contactData['message']) }}</p>
                    </div>
                  </td>
                </tr>
              </table>

              <!-- Timestamp -->
              <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr>
                  <td style="text-align: center; padding: 16px; background-color: #f7fafc; border-radius: 4px;">
                    <p
                      style="margin: 0; font-size: 12px; color: #a0aec0; text-transform: uppercase; letter-spacing: 0.5px;">
                      Received
                    </p>
                    <p style="margin: 4px 0 0 0; font-size: 14px; color: #718096;">
                      {{ now()->format('F j, Y \a\t g:i A') }}
                    </p>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td
              style="background-color: #f7fafc; padding: 20px 32px; text-align: center; border-top: 1px solid #e2e8f0;">
              <p style="margin: 0; font-size: 12px; color: #a0aec0;">
                This message was sent through your portfolio contact form.
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>

</html>