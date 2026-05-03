# Diabla — Refero Style

- Refero URL: https://styles.refero.design/style/5528d10f-2e7d-4502-aa49-7bde290e8fe2
- Site URL: https://www.diablaoutdoor.com/en
- ID: 5528d10f-2e7d-4502-aa49-7bde290e8fe2
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T01:44:23.366Z
- Ranks: newest: 531, popular: 683, trending: 531

> Tropical Modernism Pop

## Description

Diabla's visual system evokes a playful, modern aesthetic set against a backdrop of sun-drenched outdoor living. The design is characterized by crisp white and a soft pastel pink canvas, punctuated by a vibrant, almost neon red accent for crucial interactions and branding. Typography is elegant and airy, maintaining a degree of formality even amidst the relaxed, resort-like imagery. Components are lightweight with defined outlines, contributing to an open, spacious feel.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Coral Kiss | #ed2e38 | brand | Brand accent, outline buttons, active links, functional icons — a vivid pop against the muted palette |
| Carbon | #333333 | neutral | Primary body text, dark borders, general UI text |
| Deep Ink | #000000 | neutral | Headlines, strong text emphasis, button borders with a bold presence |
| Shell Pink | #fcf0f3 | neutral | Page backgrounds, card surfaces, subtle input backgrounds — provides a soft, warm canvas |
| Pure White | #ffffff | neutral | Alternative input backgrounds, card surfaces |
| Rosy Clouds | #F9C2CC | accent | Secondary accent for decorative elements, soft blocks |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Linotype Helvetica Neue LT Std Roman | Helvetica Neue | 400 | 10px, 12px, 14px, 15px, 16px, 18px, 22px, 33px | 1.00, 1.09, 1.13, 1.20, 1.22, 1.29, 1.30, 1.43, 1.50, 1.80, 2.00, 2.33, 2.80 | Body text, links, smaller headings, UI labels — provides a clean, neutral voice for information. |
| Linotype Helvetica Neue LT Std Lt | Helvetica Neue Light | 400 | 80px, 110px | 0.88, 0.91 | Large display headlines — thin weight at massive sizes creates an airy, modern, almost whispered statement. |
| Arial |  | 400 | 13px | 1.2 | Arial — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.43 |  |
| body | 14 | 1.22 |  |
| body-lg | 18 | 1.2 |  |
| heading-sm | 22 | 1.13 |  |
| heading | 33 | 1.09 |  |
| heading-lg | 80 | 0.91 |  |
| display | 110 | 0.88 |  |

## Spacing & Shape

```json
{
  "radius": {
    "links": "14px",
    "inputs": "0px",
    "buttons": "14px"
  },
  "elementGap": "10px",
  "sectionGap": "80px",
  "cardPadding": "25px",
  "pageMaxWidth": null
}
```

## Components

### Outlined Button - Coral Kiss

**Role:** Primary action button, often paired with an icon.

Text: Coral Kiss (#ed2e38), Linotype Helvetica Neue LT Std Roman, weight 400. Background: transparent. Border: 1px solid Coral Kiss (#ed2e38). Padding: 0px vertical, 20px horizontal. Border radius: 14px.

### Outlined Button - Deep Ink

**Role:** Secondary action or ghost button.

Text: Deep Ink (#000000), Linotype Helvetica Neue LT Std Roman, weight 400. Background: transparent. Border: 1px solid Deep Ink (#000000). Padding: 0px vertical, 0px horizontal. Border radius: 0px.

### Input - Underlined Coral Kiss

**Role:** Text input field with focus.

Text: Coral Kiss (#ed2e38). Background: transparent. Border: 1px solid Coral Kiss (#ed2e38) on bottom, otherwise transparent. Border-radius: 0px.

### Input - Shell Pink Background Circle

**Role:** Small input or selection with a circular, soft background.

Text: Coral Kiss (#ed2e38). Background: Shell Pink (#fcf0f3). Border: 1px solid Coral Kiss (#ed2e38). Border-radius: 50% (circular). Padding: 0px.

## Do's

- Always use Coral Kiss (#ed2e38) as the primary brand accent for interactive elements and highlights.
- Maintain a clear visual hierarchy by limiting large headlines to Linotype Helvetica Neue LT Std Lt at sizes 80px or 110px.
- Apply Shell Pink (#fcf0f3) for ambient backgrounds and card surfaces to establish the site's warm, light base.
- Utilize a 14px border radius for interactive elements like buttons and links to create a consistent soft, rounded treatment.
- Employ consistent 0px vertical padding with 20px horizontal padding for primary outlined buttons to create a flat, elongated look.
- Break up page content with alternating sections using Shell Pink (#fcf0f3) and Pure White (#ffffff) backgrounds.
- Use Linotype Helvetica Neue LT Std Roman (400) for all body text, links, and minor headings with normal letter spacing.

## Don'ts

- Avoid using multiple chromatic colors; Coral Kiss (#ed2e38) should be the singular vibrant accent.
- Do not use heavy shadows or significant elevation; maintain a flat, open aesthetic.
- Refrain from using solid fill buttons; the primary action style is an outlined button with Coral Kiss (#ed2e38).
- Never deviate from the specified font families or their intended roles and weights.
- Do not introduce complex gradient fills; the system relies on solid colors and subtle background variations.

## Layout

The page primarily uses a full-bleed layout for hero sections, filling the viewport with striking imagery and large text overlays. Subsequent sections follow a max-width contained pattern, with content centered. Section rhythm is established through consistent vertical spacing around 80px, creating a comfortable density. Content often alternates between text-dominant blocks and imagery or product showcases, following a flexible grid for features and product displays. The overall structure is open and breathable, avoiding dense information blocks.

## Imagery

Diabla features high-quality, aspirational photography and 3D renders of their furniture in lush, tropical or Mediterranean outdoor settings. The visuals are clean and focus on product integration within an idealized lifestyle. Photography is generally high-key, with natural lighting and vibrant but soft colors that blend with the brand's playful aesthetic. Imagery often serves as a full-bleed hero or contained rectangles, seamlessly integrated with text. Icons are minimal, outlined, and used descriptively for navigation and small functional elements.

## Similar Brands

| Business | Why |
| --- | --- |
| Kettal | Luxury outdoor furniture brands with a focus on clean lines, high-quality photography, and minimalist UI. |
| Ferm Living | Modern design aesthetic, often using soft color palettes and emphasis on interior/exterior lifestyle imagery. |
| Hay Design | Focus on playful modern design, often incorporates bright, unexpected accent colors against a neutral backdrop. |
| Muuto | Contemporary Scandinavian design language, blending natural elements with modern forms and vibrant accents. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #333333
- background: #fcf0f3
- border: #ed2e38
- accent: #ed2e38
- primary action: #ed2e38 (outlined action border)

Example Component Prompts:
- Create a hero overlay with the title 'SALONE DEL MOBILE': text Linotype Helvetica Neue LT Std Lt, weight 400, size 110px, line-height 0.88, color Pure White (#ffffff).
- Make an 'EXPLORE' button for navigation: text Coral Kiss (#ed2e38), Linotype Helvetica Neue LT Std Roman, weight 400. Background transparent, 1px solid Coral Kiss (#ed2e38) border. 14px border-radius, with 0px vertical and 20px horizontal padding.
- Design a text block with a subheading 'FOUR SEASONS': subheading text Coral Kiss (#ed2e38), Linotype Helvetica Neue LT Std Roman, weight 400, size 33px. Body text Carbon (#333333), Linotype Helvetica Neue LT Std Roman, weight 400, size 14px, line height 1.22.
- Produce an input field for a newsletter signup: Text Coral Kiss (#ed2e38), Linotype Helvetica Neue LT Std Roman, weight 400, size 14px. Background Shell Pink (#fcf0f3). No borders, 50% border radius for a circular shape. 5px vertical padding and 5px right margin.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513426344-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513426344-thumb.jpg |
