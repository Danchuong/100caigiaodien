# Bongusta — Refero Style

- Refero URL: https://styles.refero.design/style/588b79ff-97ee-4e90-951e-401ece6c5fe1
- Site URL: https://bongusta.dk
- ID: 588b79ff-97ee-4e90-951e-401ece6c5fe1
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T01:35:30.145Z
- Ranks: newest: 567, popular: 981, trending: 845

> Warm Minimalism Canvas

## Description

Bongusta embraces a minimalist approach with a subtle touch of warmth through its earthy, almost sepia-toned neutral palette. The system prioritizes clarity and directness with crisp typography, understated components, and an absence of heavy shadows or complex gradients. Visual hierarchy is achieved through careful typographic sizing and a singular, deep plum color that acts as the primary interactive and branding accent, offering a sophisticated contrast to the prevalent soft grays. Surfaces are uncluttered, and elevation is minimal, creating an open and airy feel.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Paper White | #ffffff | neutral | Page backgrounds, card surfaces, navigation text in inverted states, badge backgrounds |
| Plum Core | #321929 | brand | Primary text, headings, link text, active states, icon fills, outlined button borders and text — a signature color that defines brand identity and interaction with a deep, refined warmth |
| Concrete Gray | #e0dddf | neutral | Hairline borders, dividers, subtle button borders — provides structure without visual weight |
| Ink Black | #000000 | neutral | Icon fills, secondary link text, occasional emphasis in body text |
| Shadow Tint | #808080 | neutral | Mid-tone panel surface for subdued dark UI layers and secondary containers. Do not promote it to the primary CTA color |
| Input Charcoal | #1d1d1f | neutral | Input text, input borders, darker text nuances |
| Ghost Gray | #f0f0f0 | neutral | Lightest borders, very subtle background distinctions |
| Muted Stone | #636363 | neutral | Tertiary link colors, secondary helper text |
| Faded Text | #6f6d6b | neutral | Product card descriptions, secondary body text |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| NeueHaasGrotesk | Helvetica Neue | 400 | 11px, 14px, 15px, 16px, 18px, 22px | 1.00, 1.30, 1.38, 1.50, 1.70 | Primary typeface for all body, links, navigation, cards, and labels. Its consistent weight and precise letter-spacing create a highly legible and orderly text system, underpinning the brand's quiet professionalism. |
| Bongusta | Montserrat | 500 | 28px | 1.50 | Headline typeface, used for page titles and section headers. This custom font brings a distinctive, confident presence to key headings with its unique character, while maintaining a moderate weight to avoid overwhelming the minimal aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.7 | 0.154 |
| body-sm | 14 | 1.5 | 0.098 |
| heading | 18 | 1.3 | 0.126 |
| heading-lg | 22 | 1 | 0.154 |
| display | 28 | 1.5 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "other": "40px",
    "buttons": "9999px",
    "navigation": "3.5px"
  },
  "elementGap": "4-10px",
  "sectionGap": "48px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Pill Ghost Button

**Role:** Primary interactive element for calls to action.

Text color: Plum Core (#321929), transparent background. Border: 1px solid Plum Core (#321929). Padding: 0px. Radius: 9999px. Exhibits a subtle shadow on hover: rgba(50, 25, 41, 0.15) 0px 2px 10px 0px.

### Product Card

**Role:** Displaying product listings, features, and content modules.

Background: transparent. No borders or shadows. Radius: 0px. Internal padding is 0px, relying on external spacing for separation. Text color defaults to Plum Core (#321929).

### Filled Input Field

**Role:** User input for forms and subscriptions.

Background: transparent. Border: 1px solid Input Charcoal (#1d1d1f). Text color: Input Charcoal (#1d1d1f). Padding: 16px vertical, 24px horizontal. Radius: 0px.

### Outline Ghost Button

**Role:** Secondary action or navigation within content area.

Text color: Plum Core (#321929), transparent background. Border: 1px solid Concrete Gray (#e0dddf). Padding: 0px. Radius: 0px.

### White Background Button

**Role:** Used for specific interactive elements that need to stand out on darker backgrounds.

Background: Paper White (#ffffff). Text color: Plum Core (#321929). Border: 1px solid Concrete Gray (#e0dddf). Radius: 0px. Padding: 1px vertical, 5px horizontal.

### Flat Badge

**Role:** Categorization or short status labels.

Text color: Plum Core (#321929), transparent background. Radius: 0px. Padding: 0px.

### White Fill Badge

**Role:** Highlighting news or important tags.

Background: Paper White (#ffffff). Text color: Plum Core (#321929). Radius: 0px. Padding: 1px vertical, 5px horizontal.

## Do's

- Prioritize NeueHaasGrotesk for all body and UI text at 400 weight with 0.0070em letter-spacing.
- Use Plum Core (#321929) for all primary interactive elements, headings, and branding accents.
- Ensure buttons adhere to a 9999px border-radius, creating a distinct pill shape.
- Maintain a transparent background and 0px border-radius for product cards, letting content define their shape.
- Apply Concrete Gray (#e0dddf) for subtle borders and dividers, maintaining visual lightness.
- Separate major page sections with a vertical gap of approximately 48px to create breathing room.
- Use Bongusta (500 weight, 28px) exclusively for main headings to establish visual hierarchy without heavy bolding.

## Don'ts

- Avoid heavy drop shadows or complex gradients; rely on flat design and subtle borders for depth.
- Do not introduce new vibrant colors outside the defined palette; color should be used minimally and intentionally.
- Refrain from using bold typography for body text; the system maintains a consistent 400 weight for readability.
- Do not apply rounded corners to cards or input fields; maintain the crisp 0px radius for these elements.
- Avoid tight spacing between elements; ensure a minimum elementGap of 4-10px and sectionGap of 48px.
- Do not alter the letter-spacing of NeueHaasGrotesk; the precise 0.0070em is critical for its aesthetic.
- Never use generic system fonts when NeueHaasGrotesk or Bongusta are appropriate and available.

## Layout

The page maintains a centered, max-width layout, approximately 1200px wide, with consistent white backgrounds for content. The hero section often features a blurred background image with centered, large text, setting a serene tone. Section rhythm involves alternating content blocks, typically featuring two-column layouts with text and product images. A common pattern includes a grid of product cards, utilizing 0px padding and relying on external element gaps for spacing. Navigation is a minimalistic top bar, possibly sticky, with direct links. The overall density is light and spacious, with ample breathing room between sections and content elements.

## Imagery

Imagery primarily features product shots or lifestyle photography with a warm, slightly desaturated color palette, often depicting textiles or home goods. Product images are typically contained within a clean, unadorned frame, with no overlapping or complex masking. Icons are outlined, thin-stroked, and monochrome, primarily using Plum Core (#321929) or Ink Black (#000000) for a minimal, functional aesthetic. The density is image-moderate, balancing product showcases with textual information; images serve more as explanatory content and product showcase rather than decorative atmosphere.

## Similar Brands

| Business | Why |
| --- | --- |
| Tekla Fabrics | Both brands use a similar restrained, high-quality product focus with a minimalist design and a refined color palette, centered on textiles. |
| Frama | Frama shares the emphasis on natural materials, a clean aesthetic, and a subdued, earthy color scheme for presenting home goods. |
| Arket | Arket exhibits a comparable compact typographic style and minimalist e-commerce presentation with a focus on product photography. |
| Aesop | Aesop employs a similar sophisticated, text-heavy approach with a limited, high-quality color palette and very clean UI components. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- text: #321929
- background: #ffffff
- border: #e0dddf
- accent: #321929
- primary action: #321929 (outlined action border)

### 3-5 Example Component Prompts
- Create a product listing card: transparent background, 0px border-radius, with product name in NeueHaasGrotesk 15px weight 400 Plum Core (#321929) and price in Faded Text (#6f6d6b) NeueHaasGrotesk 14px weight 400.
- Design a primary action button: Pill Ghost Button with 'Next' text in NeueHaasGrotesk 16px weight 400, Plum Core (#321929) text color and 1px solid border, 9999px radius, and rgba(50, 25, 41, 0.15) 0px 2px 10px 0px shadow on hover.
- Generate a newsletter subscription input field: background transparent, 1px solid Input Charcoal (#1d1d1f) border, Input Charcoal (#1d1d1f) text color, 16px vertical and 24px horizontal padding, 0px radius.
- Produce a page heading: 'Bongusta' using Bongusta font 28px weight 500, normal letter-spacing, and Plum Core (#321929) color.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512906964-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512906964-thumb.jpg |
