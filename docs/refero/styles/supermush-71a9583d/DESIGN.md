# SuperMush — Refero Style

- Refero URL: https://styles.refero.design/style/71a9583d-1710-4696-9269-50ca8c9a2cfa
- Site URL: https://supermush.com
- ID: 71a9583d-1710-4696-9269-50ca8c9a2cfa
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T02:05:27.921Z
- Ranks: newest: 447, popular: 786, trending: 638

> Juicy electric canvas

## Description

SuperMush employs a vibrant, energetic visual system akin to a modern wellness brand. It layers a crisp white canvas with a bright, electric blue for primary actions and a playful, warm orange for highlighting key information. Typography is direct and confident, favoring sans-serifs with ample letter spacing and line height for readability. Components are lightweight with subtly rounded corners, emphasizing content and a clean user experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, input fields, navigation elements |
| Off White Clay | #f5f4f1 | neutral | Secondary surface background, subtle section dividers |
| Midnight Ink | #000000 | neutral | Primary text, core iconography, strong borders, footer background |
| Graphite | #707170 | neutral | Muted text, placeholder text in input fields, supporting detail |
| Steel Gray | #eeeeee | neutral | Subtle borders, light dividers, background for disabled states |
| Accent Blue | #2f59f8 | brand | Primary action buttons, interactive elements, significant iconography – brings energy and focus |
| Highlight Orange | #ff632a | brand | Promotional banners, decorative elements, accents for key information, secondary content borders |
| Active Yellow | #eaff00 | accent | Green wash for highlight backgrounds, decorative bands, and soft emphasis behind content |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Founders Grotesk | Inter | 400, 500, 700 | 12px, 14px, 16px, 17px, 18px, 20px, 32px, 34px, 36px, 40px, 43px, 48px | 1.00, 1.04, 1.15, 1.17, 1.21, 1.25, 1.40, 1.50, 1.60, 1.67 | Primary headings, body text, navigation elements, input labels – delivers a clean, confident, and highly readable voice across the interface. |
| GT Planar | Montserrat | 400, 500, 700 | 10px, 11px, 13px, 14px, 16px, 18px, 20px | 1.00, 1.15, 1.25, 1.29, 1.60 | Secondary text, descriptive elements, button text, and certain navigation links – offers a complementary, slightly more technical feel. |
| Font Awesome 5 Pro |  | 300 | 18px | 1 | Font Awesome 5 Pro — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.6 |  |
| body | 14 | 1.25 |  |
| body-lg | 17 | 1.5 |  |
| subheading | 20 | 1.21 |  |
| heading | 32 | 1.4 |  |
| heading-lg | 36 | 1.15 |  |
| display | 48 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "inputs": "1.67772e+07px",
    "buttons": "50px",
    "general": "4px",
    "imagery": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "24px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Calls to action, form submissions.

Background: Accent Blue (#2f59f8). Text: Canvas White (#ffffff). Fully rounded corners (50px radius). Padding: 10px vertical, 20px horizontal. Font: GT Planar, weight 500.

### Ghost Button (Header Nav)

**Role:** Secondary navigation in header.

Background: transparent. Text: Midnight Ink (#000000). No explicit border radius. Padding: 0px. Font: Founders Grotesk.

### Pill Accent Button

**Role:** Information tags, small labels, sale indicators.

Background: Active Yellow (#eaff00) or Highlight Orange (#ff632a). Text: Midnight Ink (#000000). Fully rounded (50px radius). Padding: 4px vertical, 8px horizontal (inferred small item padding). Font: GT Planar.

### Neutral Rounded Button

**Role:** Quantity selectors, small interactive elements.

Background: #d9d9d9. Text: Midnight Ink (#000000). Fully rounded (50% radius). No explicit padding observed.

### Product Card

**Role:** Displaying product items in grids.

Background: transparent. Border: none. Border-radius: 0px. Internal padding: 0. Some cards may have a subtle transparent background rgba(0, 0, 0, 0.1) and 16px border-radius, with 48px vertical and 16px horizontal internal padding.

### Subtle Elevated Card

**Role:** For reviews or distinct content blocks.

Background: Canvas White (#ffffff). Border-radius: 16px. Padding: 48px vertical, 16px horizontal. No box shadow.

### Pill Input Field

**Role:** Text input forms.

Background: Canvas White (#ffffff). Text color: Graphite (#707170). Border: 1px solid Steel Gray (#eeeeee). Fully rounded corners (1.67772e+07px radius). Padding: 12px vertical, 16px left, 32px right.

## Do's

- Use Accent Blue (#2f59f8) for all primary calls to action, ensuring a fully rounded 'pill' shape with 50px border-radius and Canvas White (#ffffff) text.
- Apply Highlight Orange (#ff632a) sparingly for promotional banners, secondary content borders, and decorative accents to draw attention.
- Structure primary content on Canvas White (#ffffff) backgrounds, using Off White Clay (#f5f4f1) or transparent backgrounds for secondary sections or cards to create subtle visual breaks.
- Ensure all body text uses Founders Grotesk at appropriate weights, with Midnight Ink (#000000) for primary content and Graphite (#707170) for muted or helper text.
- Utilize a 16px border-radius for all content cards that require a defined surface, maintaining a light background.
- Maintain comfortable spacing with a base unit of 4px. Use 8px as the default element gap and 16px for card padding.
- Highlight sale or special offers with a distinctly bright Active Yellow (#eaff00) background, paired with Midnight Ink (#000000) text and a pill shape.

## Don'ts

- Do not use dark backgrounds for general page sections; the theme is predominantly light and airy.
- Avoid arbitrary uses of color; Limit saturated colors (Highlight Orange, Accent Blue, Active Yellow) to functional or branding purposes.
- Do not introduce square corners for buttons or interactive elements; prioritize soft, rounded edges (50px or greater radius).
- Do not use complex drop shadows or elevation effects; elements should generally appear flat or with minimal, subtle elevation.
- Avoid using multiple font families beyond Founders Grotesk and GT Planar to maintain brand consistency.
- Do not decrease letter-spacing below 'normal'; the brand maintains an open and readable typographic feel.
- Avoid padding less than 10px on interactive elements to ensure adequate tap/click targets.

## Layout

The page adheres to a max-width contained layout generally centered, though specific section widths can vary to accommodate full-bleed image backgrounds. The hero section often features a full-bleed vibrant image with centered, overlaid text and calls to action. Sections maintain a consistent vertical rhythm, with content arranged in alternating text-left/image-right or centered stacks. Card grids are used for product displays with typically 4 columns. Navigation is a sticky top bar with a distinct brand logo and minimal links, complemented by the prominent Accent Blue 'Shop All' button.

## Imagery

Photography is dominant, featuring lifestyle shots of people using products in active, natural settings (beaches, outdoors) alongside clean, focused product photography. Treatments are largely unedited and natural-looking, showing vibrant colors and real-world contexts. Product shots are typically contained within cards with 8px radius. Icons are monochrome, often using a thin stroke, mainly for utility and navigation, appearing as simple outlines or filled shapes depending on context. Imagery serves both decorative atmosphere and product showcase, usually occupying significant visual space.

## Similar Brands

| Business | Why |
| --- | --- |
| Oura Ring | Uses a similar natural photography style with an emphasis on health and wellness, and a clean, spacious UI. |
| Athletic Greens (AG1) | Features a light, clean interface with product-focused imagery and subtle use of accent colors to highlight benefits. |
| Huel | Combines lifestyle photography with a clear, direct typographic approach and functional color accents on product pages. |
| Ritual | Utilizes a clean white background, vibrant product imagery, and a restrained color palette for calls to action. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #eeeeee
accent: #ff632a
primary action: #2f59f8 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #2f59f8 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
3. Create a review card: use Subtle Elevated Card style, with review text in Founders Grotesk weight 400 at 14px, color Midnight Ink (#000000). Reviewer name in GT Planar weight 500 at 12px, color Graphite (#707170).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514706845-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514706845-thumb.jpg |
