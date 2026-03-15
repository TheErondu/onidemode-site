<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game Show Registration - Terms and Conditions</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 30px;
      background: #f9f9f9;
      color: #333;
    }
    .container {
      max-width: 800px;
      margin: auto;
      background: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    .terms-box {
      border: 1px solid #ccc;
      padding: 15px;
      height: 300px;
      overflow-y: scroll;
      background: #fafafa;
      margin-bottom: 20px;
      white-space: pre-wrap;
    }
    label {
      display: block;
      margin-top: 15px;
    }
    .checkbox {
      margin-right: 10px;
    }
    button {
      display: inline-block;
      background: #007bff;
      color: #fff;
      border: none;
      padding: 12px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 15px;
    }
    button:disabled {
      background: #aaa;
      cursor: not-allowed;
    }
  </style>
  <script>
    function toggleSubmit() {
      const checkbox = document.getElementById("accept");
      const submitBtn = document.getElementById("submitBtn");
      submitBtn.disabled = !checkbox.checked;
    }
  </script>
</head>
<body>
  <div class="container">
    <h1>Terms and Conditions</h1>
    <div class="terms-box">
      <strong>These Terms and Conditions (“Terms”) govern participation in the ONIDEMODE "GAME SHOW", organized by Awikonko Tv. By registering and participating, you (“Participant”) agree to be bound by the following:</strong>

      1. Eligibility
      1.1. Participants must be at least 18 years of age or have parental/guardian consent if underage.
      1.2. Participants must have completed the online registration and paid the non-refundable participation fee.
      1.3. Employees, affiliates, and immediate family members of the organizing body are not eligible to participate.

      2. Registration and Participation Fee
      2.1. All participants must complete the online registration form via the official platform.
      2.2. A participation fee of {{ config('settings.participant_registration_fee', '') }} must be paid upon registration to confirm participation.
      2.3. The fee is non-refundable, regardless of withdrawal, disqualification, or failure to participate.
      2.4. Proof of payment may be requested at any time during the process.

      3. Game Format
      3.1. The Game consists of theory of 15 Questions in 3 Segments of 5 Questions each
      3.2. Organizers reserve the right to modify the rules or structure at any time.

      4. Prizes
      4.1. Winners will receive advertised prizes.
      4.2. Prizes are non-transferable and not exchangeable for cash.
      4.3. Taxes/charges are the sole responsibility of winners.
      4.4. Failure to comply may lead to disqualification.

      5. Disqualification
      - Providing false information
      - Using unauthorized materials
      - Disruptive or inappropriate behavior
      - Breaching any part of these Terms

      6. Intellectual Property
      6.1. All content remains the property of the Organizers.
      6.2. Participants grant Organizers the right to use names, images, and recordings for promotions.

      7. Limitation of Liability
      7.1. Organizers are not liable for damages, losses, or injuries from participation.
      7.2. Game is provided “as is” without warranties.

      8. Data Privacy
      8.1. Personal information will be used only for the Game.
      8.2. Data will not be shared except as required by law.

      9. Governing Law
      Governed by laws of Nigeria, with disputes under the jurisdiction of High Court of Osun State.

      10. Acceptance
      By registering and paying, you confirm that you have read, understood, and agreed to abide by these Terms and Conditions.
    </div>

    <form action="/submit-terms" method="post">
      <label>
        <input type="checkbox" id="accept" class="checkbox" onclick="toggleSubmit()"> I have read and accept the Terms and Conditions
      </label>
      <button type="submit" id="submitBtn" disabled>Proceed</button>
    </form>
  </div>
</body>
</html>
