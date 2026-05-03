# Flowers For Society — Refero Style

- Refero URL: https://styles.refero.design/style/e00519a1-7b8a-4171-b49b-550c64a57d3c
- Site URL: https://flowersforsociety.com
- ID: e00519a1-7b8a-4171-b49b-550c64a57d3c
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T02:29:10.718Z
- Ranks: newest: 364, popular: 974, trending: 979

> Organic Modernity — grounded, yet forward-looking

## Description

Flowers For Society employs a vibrant, optimistic aesthetic, designed to evoke connection with nature and purpose. It pairs a crisp white canvas with a single dominant 'Deep Cobalt' blue, used prominently for interactive elements, text, and borders, establishing a strong brand identity. Typography is bold and confident, utilizing custom serifs for display and approachable sans-serifs for body text, creating a balanced hierarchy. Components feature soft, rounded edges, suggesting organic forms and approachability, with a focus on clear, unembellished functionality.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| White Canvas | #ffffff | neutral | Page backgrounds, card surfaces, form input fills, and button text |
| Deep Cobalt | #203b90 | brand | Primary brand color. Used for CTA buttons, active links, primary headings, borders, and input focus states. It projects authority and trust |
| Muted Indigo | #7989bc | neutral | Subtle borders and decorative accents within broader elements, indicating a softer interaction or separation |
| Ink Black | #000000 | neutral | Primary body text, icons, and some input text, providing high contrast against light backgrounds |
| Pale Ash | #f2f2f2 | neutral | Section backgrounds and footer background, providing a subtle visual break from the main white canvas |
| Charcoal Border | #1b1b1b | neutral | Subtle border color, used for ghost buttons or other non-primary outlines |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Soehne | system-ui | 400, 700 | 11px, 14px, 16px, 18px | 1.20, 1.30, 1.40, 1.50, 1.80 | Primary sans-serif for body text, navigation items, and button labels. It maintains readability with generous letter-spacing, supporting the comfortable density. |
| Integral | serif | 400 | 13px, 15px, 18px, 35px, 37px, 45px, 52px | 0.92, 1.00, 1.10, 1.28 | Distinctive custom serif for headings and display text. Its condensed, strong presence and tight line-height create impactful statements. |
| Arial | sans-serif | 400, 700 | 14px | 1.20 | Fallback and utilitarian text where a common system font is appropriate, primarily for small body text or links. |
| Nunito-Sans-Klaviyo-Hosted | Nunito Sans | 400, 700 | 18px, 20px | 1.00, 1.20 | Used for input text and some button labels, providing a softer, more rounded sans-serif alternative to Soehne. |
| GTStandard-M | sans-serif | 400 | 18px | 1.50 | Specific instances of emphasized text, potentially for decorative statements or unique sections. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.4 |  |
| body-sm | 14 | 1.4 |  |
| body | 16 | 1.4 |  |
| body-lg | 18 | 1.4 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "4px",
    "inputs": "41px",
    "buttons": "41px",
    "smallElements": "4px"
  },
  "elementGap": "5px",
  "sectionGap": "50px",
  "cardPadding": "30px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Main call-to-action button, conveying primary intent.

Filled with Deep Cobalt (#203b90), text in White Canvas (#ffffff), with a highly rounded border-radius of 41px. Padding provides ample space around the text (e.g., 0px vertical, 30px horizontal).

### Ghost Button

**Role:** Secondary action or navigational button, designed to be less prominent.

Transparent background with text and a thin border in Deep Cobalt (#203b90). No explicit border-radius, often appearing as a text link with an implied hover state. Padding is minimal (e.g., 0px).

### Large Rounded Heading Button

**Role:** Specialized large button for key conceptual actions or navigation between sections.

Filled with Deep Cobalt (#203b90), text in White Canvas (#ffffff), with an exaggerated border-radius of 60px. This button is visually distinct for emphasis.

### Text Input (Rounded)

**Role:** Standard form input for user data entry.

White Canvas (#ffffff) background, text in Ink Black (#000000). Features a thin Deep Cobalt (#203b90) border and a 41px border-radius. Generous internal padding (e.g., 15px vertical, 15px left, 98px right for possible affordance) for a soft, inviting feel.

### Text Input (Subtle)

**Role:** Alternative simple text input, potentially for smaller forms or searches.

White Canvas (#ffffff) background, text in Ink Black (#000000). Defined by a thin Deep Cobalt (#203b90) bottom border and a minimal 4px border-radius. Text has 16px left padding.

### Navigation Link

**Role:** Top-level navigation items within the header.

Soehne text in Ink Black (#000000) or Deep Cobalt (#203b90) at 14px, typically with padding of 12px or 13px around them to create spacious, clickable areas.

### Product Card

**Role:** Display individual products within a grid or list.

Implicitly uses White Canvas (#ffffff) background with content padded by 30px. Features a subtle 4px border-radius, suggesting a contained, clean product display area without heavy visual elements.

## Do's

- Prioritize Deep Cobalt (#203b90) for all primary actions and key interactive elements, ensuring brand recognition.
- Use Soehne for body text and navigation, maintaining tight letter-spacing for consistency, e.g., 0.0560em at 14px.
- Apply a 41px border-radius universally to primary buttons and form inputs for a soft, consistent brand feel.
- Employ Integral for all headings, using its various sizes with tight line-heights (e.g., 0.92-1.28) to create strong visual statements.
- Maintain a clear visual hierarchy by limiting prominent colors to Deep Cobalt (#203b90) and utilizing White Canvas (#ffffff) and Pale Ash (#f2f2f2) for backgrounds.
- Ensure generous internal padding for components, using values like 15px vertical padding for inputs and 30px horizontal for buttons for comfort and legibility.
- Leverage the Pale Ash (#f2f2f2) background for section breaks to provide visual breathing room between content blocks.

## Don'ts

- Avoid using multiple vibrant chromatic colors; limit the accent palette primarily to Deep Cobalt (#203b90).
- Do not introduce sharp, unrounded corners on interactive elements; maintain a consistent rounded aesthetic (41px, 4px, or 60px).
- Refrain from using thin, light fonts for headings; Integral, weight 400, should carry the visual weight.
- Do not clutter components with excessive borders or shadows; keep them clean and subtly defined, often by just one color.
- Avoid tight spacing between elements; use the established elementGap of 5px and cardPadding of 30px to maintain comfortable density.
- Do not use generic system fonts when custom fonts like Soehne and Integral are available for text and headings.
- Avoid heavy drop shadows or complex elevation; the design relies more on color contrast and clear surface separation.

## Layout

The page primarily uses a max-width contained layout, though the hero section can be full-bleed with a product image centered over a natural background. The hero often features a prominent heading and a central call-to-action. Content sections typically alternate between subtle Pale Ash (#f2f2f2) and White Canvas (#ffffff) backgrounds, creating a clear vertical rhythm. Content arrangement frequently uses large, centered headings, followed by text and image blocks, sometimes in two-column layouts. A common pattern is stacked information with comfortable vertical spacing (sectionGap 50px). Navigation is a clean top bar with core links and user icons, appearing sticky or fixed-position.

## Imagery

The visual language is split between high-quality product photography and evocative macro-level shots of nature. Photography is product-focused, showcasing footwear in natural, often vibrant, outdoor settings (like sneakers surrounded by pink daisies). Product images are often well-lit, providing clear detail. Illustration style is limited to functional icons that are typically monochromatic (Ink Black or Deep Cobalt), outlined, and simple. Imagery functions both decoratively to set a peaceful, natural atmosphere and explanatorily to highlight product features. The density is moderate, with images playing a significant role in hero sections and product features but balancing with text-dominant areas.

## Similar Brands

| Business | Why |
| --- | --- |
| New Balance | A focus on clean product photography in natural settings with a strong brand accent color on a neutral background. |
| Allbirds | Emphasis on sustainable materials, soft rounded shapes, and an approachable, nature-inspired visual identity with limited color palettes. |
| Veja | Clean, product-centric e-commerce design with a strong commitment to ethical production, reflected in a straightforward, honest visual style. |
| Everlane | Minimalist aesthetic with high-quality photography and a focus on transparency, utilizing a limited color palette and clear typography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #203b90
accent: no distinct accent color
primary action: #203b90 (filled action)

Example Component Prompts:
1. Create a primary call-to-action button: background #203b90, text #ffffff, 41px border-radius, padding 0px vertical and 30px horizontal, using Soehne font weight 400 at 16px.
2. Design a rounded text input field: background #ffffff, text #000000, border #203b90, 41px border-radius, 15px padding all around. Placeholder text should be Deep Cobalt #203b90.
3. Build a main heading: Integral font, weight 400, size 52px, line-height 0.92, letter-spacing 0.0770em, color #000000, centered on a White Canvas background.
4. Create a navigation link: Soehne font, weight 400, size 14px, line-height 1.2, letter-spacing 0.0550em, color #000000, with 12px vertical and 12px horizontal padding. On hover, the text color should become Deep Cobalt #203b90.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516127353-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777516127353-thumb.jpg |
