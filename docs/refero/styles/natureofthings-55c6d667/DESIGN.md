# natureofthings — Refero Style

- Refero URL: https://styles.refero.design/style/55c6d667-40f5-45c6-9ffe-3e9543334186
- Site URL: https://natureofthings.com
- ID: 55c6d667-40f5-45c6-9ffe-3e9543334186
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:40:32.539Z
- Ranks: newest: 97, popular: 679, trending: 475

> Minimalist gallery canvas

## Description

natureofthings uses a quiet luxury aesthetic, built on a foundation of clean achromatic grays and whites. Typography is compact and precise, using Founders Grotesk for most content, often with elevated letter-spacing. Interaction is primarily driven by subtle outline changes and text underlines, with a single muted blue providing unobtrusive functional contrast without disrupting the monochrome canvas.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, elevated card surfaces, primary input fields |
| Ink | #000000 | neutral | Primary text, headings, strong borders, interactive elements |
| Muted Stone | #696159 | neutral | Subtle background for footer sections |
| Soft Gray | #746c6c | neutral | Placeholder text in input fields, secondary body text |
| Interaction Azure | #0066cc | brand | Links, outlined interactive elements — provides functional distinction without strong visual hierarchy |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Founders Grotesk | system-ui | 400, 500, 700 | 12px, 13px, 14px, 16px, 18px, 30px | 1.10, 1.20, 1.30, 1.50 | Primary typeface for all headings, body text, navigation, and interface elements. Its neutrality allows content to take precedence, with varied letter-spacing adding subtle emphasis where needed. |
| Arial | Arial, Helvetica, sans-serif | 400 | 14px | 1.20 | Used for specific body text scenarios, likely as a fallback or for specific small text applications where system fonts are preferred. |
| Atlas Grotesk | system-ui | 300, 700 | 12px | 1.20 | Specialized usage for specific labels or input fields, its varied weights provide granular control for small, technical text while maintaining overall typographic harmony. |
| GTStandard-M | system-ui | 400 | 16px | 1.50 | Likely used for specific informational text blocks or decorative elements, providing a consistent body text size. |
| Poppins | system-ui | 700 | 24px | 1.00 | Used for standout button text, its strong weight and larger size draw attention to calls to action within a generally understated typographic landscape. |
| Founder’s Grotesk |  | 400, 500 | 12px, 13px | 1.2 | Founder’s Grotesk — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.1 | 0.12 |
| body | 14 | 1.3 |  |
| heading | 18 | 1.2 | 0.18 |
| display | 30 | 1.1 | 0.3 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "0px",
    "default": "2px"
  },
  "elementGap": "8px",
  "sectionGap": "40px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link (White)

**Role:** Ghost link

Used in header and navigation. Text color Ink (#000000), transparent background with no border. Text is typically 12-14px Founders Grotesk, weight 400.

### Navigation Link (Dark)

**Role:** Ghost link

Used in header/footer on dark backgrounds. Text color Canvas White (#ffffff), transparent background. Text is typically 12-14px Founders Grotesk, weight 400.

### Input Field (Ghost)

**Role:** Data entry

Minimalist input field, transparent background, text color Canvas White (#ffffff), with a bottom border of Canvas White (#ffffff). Padding is 11px vertical. Placeholder text is Muted Stone (#696159).

### Inline Text Link

**Role:** Navigation

Text in Interaction Azure (#0066cc), with a matching 1px bottom border. Used for discrete internal links like 'Privacy Policy'.

### Search Button

**Role:** Icon button

Circular button with Ink (#000000) text on a transparent background, radius 50% for a perfect circle. Used for search or similar icons.

### Shop All Button

**Role:** Ghost button with padding

Text in Ink (#000000) on Canvas White (#ffffff) background, with 10px horizontal padding. No border and 0px radius, indicating an interactive element within a card or section.

### Privacy Policy Link

**Role:** Underlined link

Text in Interaction Azure (#0066cc) with a matching 1px solid border bottom. Provides navigational emphasis without a full button shape.

## Do's

- Prioritize Ink (#000000) for all primary text and Canvas White (#ffffff) for backgrounds to maintain a clean, high-contrast aesthetic.
- Use Founders Grotesk for all primary typographic elements, adjusting letter-spacing by 0.01em or 0.04em to create subtle variations in emphasis.
- Apply 0px border-radius to interactive buttons unless a perfect circle is intended, favoring sharp edges for UI elements.
- Utilize 40px as the standard vertical separation between major content sections.
- When a distinct call to action is required, use Interaction Azure (#0066cc) for text and outline, avoiding solid colored backgrounds for interactive elements.
- Maintain comfortable density using 8px as the base unit for element gaps, ensuring consistent spacing between components.
- Employ Soft Gray (#746c6c) exclusively for placeholder text within input fields, differentiating it from active input.

## Don'ts

- Avoid arbitrary color usage; retain the minimalist achromatic palette with Interaction Azure (#0066cc) as the sole accent color.
- Do not use heavy shadows or gradients; rely on contrast and spacing to define UI hierarchy.
- Refrain from mixing fonts excessively; Founders Grotesk should dominate, with highly limited use of others for specific technical purposes.
- Do not break the 0px radius rule for primary buttons; rounded corners are a specific stylistic departure from this system.
- Avoid dense, information-heavy blocks; ensure generous use of whitespace with a comfortable density strategy.
- Do not introduce strong visual metaphors or decorative elements that disrupt the clean, gallery-like canvas.
- Do not use filled buttons as primary actions; always prefer outlined or text links with Interaction Azure (#0066cc) for emphasis.

## Layout

The page maintains a centered, max-width contained layout, though specific sections may extend full-bleed. The hero section often features a centered headline over a background image or a clean product shot. Content proceeds with consistent vertical spacing, often alternating between text-left/image-right sections and centered text blocks. Card grids, like for product categories, are present but not overly dense. Navigation is handled by a discreet top bar that may become sticky, providing a minimalist browsing experience that prioritizes content.

## Imagery

Imagery primarily features product shots or carefully composed art-direction photography. Product shots are typically clean, isolated items presented on a white or light gray background. Lifestyle photography embeds products or abstract elements within natural, often muted-tone, outdoor settings, offering a sense of calm and organic origin. Images are usually contained within rectangular bounds, without overlapping elements, and serve as decorative atmosphere or product showcase. Icons, when present, are simple, outlined, and monochromatic, maintaining the understated aesthetic. The overall image density is moderate, carefully balanced with text to create a feeling of spaciousness.

## Similar Brands

| Business | Why |
| --- | --- |
| Aesop | Shares a monochromatic aesthetic with precise typography and a focus on product presentation through clean photography and understated UI. |
| Glossier | Similar emphasis on minimalist design, clean product shots, and a limited color palette that makes specific product packaging stand out. |
| Byredo | Known for a sophisticated, restrained visual language, using high-quality photography and a refined typographic approach within a predominantly neutral UI. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: #0066cc
primary action: #0066cc (outlined action border)

Example Component Prompts:
1. Create an Outlined Primary Action: Transparent background, #0066cc border and text, 9999px radius, compact pill padding. Use it for the main CTA instead of a filled button.
2. Design a minimalist input field: 11px vertical padding, transparent background, Canvas White (#ffffff) text, Soft Gray (#746c6c) placeholder, with a 1px bottom border in Canvas White (#ffffff).
3. Generate a 'Shop All' button: Poppins, 24px, weight 700, Ink (#000000) text, Canvas White (#ffffff) background, 10px horizontal padding, 0px border-radius.
4. Create a footer section background: Muted Stone (#696159) background, Ink (#000000) text, with 40px top and bottom padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520412006-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520412006-thumb.jpg |
