# BelArosa Chalet — Refero Style

- Refero URL: https://styles.refero.design/style/46c8dbc5-47c8-4796-b94c-5e46dcda3532
- Site URL: https://www.belarosa-chalet.ch
- ID: 46c8dbc5-47c8-4796-b94c-5e46dcda3532
- Theme: light
- Industry: agency
- Created: 2026-04-30T01:38:58.880Z
- Ranks: newest: 554, popular: 649, trending: 457

> Alpine Chalet Refinement: warm, textural, and quietly luxurious.

## Description

BelArosa Chalet evokes a bespoke alpine luxury aesthetic, blending raw natural textures with refined details. A palette of deep, muted teal and warm off-white creates an understated elegance, punctuated by a delicate golden accent. Typography combines the classic formality of ITC Giovanni Std with the modern versatility of Avenir LT Pro, applied at a comfortable density. Components are minimal, often outlined or ghosted, prioritizing content and image presentation over heavy UI elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Chalet Teal | #193741 | brand | Primary text, darkened background sections, button borders, subtle UI accents — establishes a sophisticated, grounding depth |
| Deep Teal | #1d414d | brand | Gray accent for outlined action borders, linked labels, and lightweight interactive emphasis. Do not promote it to the primary CTA color |
| Alpine Gold | #eac486 | accent | Decorative icons, seasonal highlights, subtle branding elements — provides a touch of warmth and luxury against the cool neutrals |
| Paper White | #ffffff | neutral | Page backgrounds, default text in dark sections, borders for light sections, icon fills — functions as the primary canvas |
| Warm Linen | #ebe7e1 | neutral | Secondary background surfaces, card backgrounds in light contexts — a soft, off-white that adds warmth without starkness |
| Muted Stone | #8c9ba0 | neutral | Subtle borders, secondary text, inactive states, ghost button borders in a light context — a cool-toned gray for quiet details |
| Rich Black | #000000 | neutral | Input borders, decorative fills, some icon fills — used for high-contrast details against lighter backgrounds |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| ITC Giovanni Std | Georgia, Playfair Display | 700 | 16px, 18px, 28px, 48px, 64px | 1.10, 1.20, 1.30, 1.40 | Display headings and prominent section titles — its seriffed elegance and bold weight establishes a traditional, luxurious tone. |
| Avenir LT Pro | Open Sans, Lato | 400 | 12px, 14px, 16px, 20px, 24px, 28px, 40px | 1.00, 1.20, 1.25, 1.40, 1.43, 1.50, 1.71 | Body copy, navigation, functional elements, and subheadings — its clean, open forms ensure readability while supporting the sophisticated aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.71 | 1.5 |
| body-sm | 14 | 1.5 | 1.5 |
| body | 16 | 1.43 | 1.5 |
| subheading | 20 | 1.25 | 1.5 |
| heading | 28 | 1.2 | 0 |
| heading-lg | 40 | 1 | 1.25 |
| display | 64 | 1.1 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "links": "12px",
    "buttons": "80px"
  },
  "elementGap": "24px",
  "sectionGap": "48px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Outlined Button

**Role:** Primary action button with a luxury aesthetic

Ghost-style button with a border of Chalet Teal (#193741) or Paper White (#ffffff) and matching text color. Padding is 20px vertical, 32px horizontal. Full pill shape with an 80px border-radius, emphasizing natural and soft forms.

### Text Link

**Role:** Navigation and secondary calls to action

Simple text link, either Chalet Teal (#193741) or Paper White (#ffffff), with no background or padding. Avenir LT Pro, weight 400. Letter spacing of 0.125em at smaller sizes and 0.167em at larger.

### Circular Card Accent

**Role:** Decorative card element for emphasis

Small circular card with Chalet Teal (#193741) background, 100% border-radius, and 16px of horizontal padding to contain content without explicit vertical padding.

### Input Field (Text)

**Role:** Form input elements

Input fields have a Chalet Teal (#193741) background with Paper White (#ffffff) text. A 1px Rich Black (#000000) bottom border for definition. Padding is 8px vertical, 0px horizontal.

## Do's

- Prioritize ITC Giovanni Std 700 for all display and major section headings to maintain a sense of traditional luxury.
- Use Avenir LT Pro 400 for all body text, navigation, and subordinate UI elements, ensuring consistency and readability.
- Apply Chalet Teal (#193741) as the primary accent color for outlines and text, reserving Alpine Gold (#eac486) for subtle highlights only.
- Employ the 80px border-radius for all primary buttons to achieve a soft, pill-shaped aesthetic.
- Maintain comfortable spacing with 24px as a standard `elementGap` between UI elements and `sectionGap` between major content blocks.
- Use Paper White (#ffffff) as the primary page canvas for light sections and Warm Linen (#ebe7e1) for secondary interactive surfaces.
- Establish interactive elements with an outlined or ghost style using Chalet Teal (#193741) or Deep Teal (#1d414d) borders, avoiding solid filled buttons for primary calls to action.

## Don'ts

- Avoid using solid filled buttons for primary calls to action; always prefer the outlined or ghost styles.
- Do not introduce new saturated primary colors; limit the accent palette to Alpine Gold (#eac486).
- Avoid using drop shadows or heavy box-shadows that would detract from the site's flat, natural aesthetic.
- Do not deviate from the specified letter-spacing for Avenir LT Pro; its subtle tracking is part of the brand's typographic signature.
- Do not use hard-edged, 0px border-radius for buttons; always apply the 80px radius for a consistent soft feel.
- Do not assume color #0000ee is a brand color; this is a browser default that must be overridden with brand-approved values.

## Similar Brands

| Business | Why |
| --- | --- |
| Airelles | Luxury hotel experience with a focus on immersive photography and sophisticated serif typography on a light canvas. |
| The Chedi Andermatt | High-end alpine hospitality, using a refined color palette, large imagery, and classic-modern font pairing. |
| Virgin Limited Edition | Brand of exclusive properties, with similar layout patterns balancing large visuals, elegant text, and a discerning color palette. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #193741
background: #ffffff
border: #193741
accent: #eac486
primary action: #1d414d (outlined action border)

Example Component Prompts:
1. Create a Hero Section: full-bleed background image. Headline 'We’re rethinking luxury.' at 64px ITC Giovanni Std 700, #ffffff. Subtext 'Your alpine nest offering freedom, space and indulgence.' at 20px Avenir LT Pro 400, #ffffff, letter-spacing 1.5px. Add a 'Book your stay' outlined button (border: 1px solid #ffffff, text: #ffffff, 80px radius, 20px 32px padding).
2. Create a Feature Card: on a Warm Linen (#ebe7e1) background. Headline 'Skypool Chalet' at 28px ITC Giovanni Std 700, #193741. Body text at 16px Avenir LT Pro 400, #193741. Add a 'Discover now' ghost button (border: 1px solid transparent, text: #193741) aligned to the Chalet Teal (#193741) border color found in outlines and accents.
3. Create a Navigation Link: 'Cuisine' in Avenir LT Pro 400, 16px, #193741, letter-spacing 1.5px, no background, no border, 12px radius on hover. Below it, a thin underline of Chalet Teal (#193741) on hover.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513112362-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513112362-thumb.jpg |
