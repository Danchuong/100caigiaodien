# Subset — Refero Style

- Refero URL: https://styles.refero.design/style/a4dcee26-dd31-415a-ac99-64299959e7f1
- Site URL: https://knickey.com
- ID: a4dcee26-dd31-415a-ac99-64299959e7f1
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:26:29.127Z
- Ranks: newest: 153, popular: 737, trending: 596

> Organic Canvas, Understated Authority

## Description

Subset embraces a grounded, natural aesthetic, combining the tactile feel of organic materials with a clean, unadorned interface. The visual design prioritizes clear product presentation against a muted, almost oatmeal-colored canvas, punctuated by utilitarian typography and a few carefully chosen, moderately saturated accent colors. Components are minimal and unfussy, focusing on function over adornment, embodying a sense of reliable simplicity. Color is used sparingly, primarily to distinguish states or add a subtle brand signature rather than for bold visual statements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Oatmeal Canvas | #f5f4ee | neutral | Page backgrounds, card surfaces — a soft, natural base |
| Ink | #241f20 | neutral | Primary text, borders, icons, and significant structural elements. Almost black, but with a barely-there warmth |
| Pure White | #ffffff | neutral | Contrasting text colors, selected component backgrounds, input fields, and badge borders |
| Cool Stone | #808080 | neutral | Muted text, secondary icons, and subtle borders |
| Rich Earth | #000000 | neutral | Bold text, specific icon fills, and strong outlines |
| Deep Forest | #233735 | brand | Prominent button backgrounds and borders for primary actions — a sophisticated, deep green-gray |
| Mineral Blue | #6487ba | brand | Secondary action button backgrounds and borders, link colors — a calm, inviting blue |
| Spring Bud | #8bbd78 | accent | Decorative icons, borders, and subtle typographic accents for specific elements |
| Sunset Orange | #ff965b | accent | Highlight elements like badges, decorative icons, and rating stars — a vivid, energetic accent |
| Misty Rose | #edcdc2 | accent | Background for specific content sections or decorative elements — a soft, desaturated blush tone |
| Olive Green | #5b7763 | accent | Background for specific content sections or decorative elements |
| Dark Plum | #27293d | accent | Decorative background for featured links |
| Warm Berry | #5c2722 | accent | Decorative background for featured links |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| FoundersGrotesk | Inter | 400, 500, 700 | 13px, 14px, 15px, 16px, 17px, 18px, 20px, 24px | 0.90, 1.00, 1.10, 1.20, 1.40, 1.43, 1.46, 1.50, 1.53, 1.60, 1.63 | Used for all body text, navigation elements, buttons, and form labels. Its robust versatility and wide range of weights and sizes make it the system's workhorse, providing a grounded, utilitarian feel with subtle tracking variations for different scales. |
| TTRamillas_Light | Playfair Display | 400 | 18px, 20px, 24px, 32px, 40px, 42px | 1.00, 1.20, 1.24, 1.29, 1.38, 1.40, 1.53 | Exclusively for display headlines and prominent section titles. Its light weight and negative letter-spacing create an elegant and airy contrast to the FoundersGrotesk, conveying authority through refinement rather than bold impact. |
| GTStandard-M | Roboto Mono | 400 | 17px | 1.50 | A singular use case as a mono-spaced variant, likely for specific metadata or code-like elements where fixed-width characters are desired. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.5 | 0.3 |
| heading | 18 | 1.4 | -0.1 |
| heading-lg | 24 | 1.29 | -0.1 |
| display | 42 | 1 | -0.1 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "badges": "0px",
    "inputs": "0px",
    "buttons": "0px",
    "circularElements": "50%"
  },
  "elementGap": "8px",
  "sectionGap": "64px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Filled button for main calls to action.

Background: Deep Forest (#233735). Text: Pure White (#ffffff). Padding: 16px vertical, 32px horizontal. Border radius: 0px. Typography: FoundersGrotesk, 16px, 400 weight.

### Secondary Action Button

**Role:** Filled button for alternative calls to action.

Background: Mineral Blue (#6487ba). Text: Pure White (#ffffff). Padding: 16px vertical, 32px horizontal. Border radius: 0px. Typography: FoundersGrotesk, 16px, 400 weight.

### Ghost Button

**Role:** Outlined button for less prominent actions.

Background: transparent. Text: Ink (#241f20). Border: 1px Ink (#241f20). Padding: 0px. Border radius: 50% for icon-only, 0px for text. Typography: FoundersGrotesk.

### Informative Badge

**Role:** Small, distinct label for status or newness.

Background: Sunset Orange (#ff965b). Text: Pure White (#ffffff). Padding: 8px vertical, 10px horizontal. Border radius: 0px. Typography: FoundersGrotesk, 13px, 400 weight.

### Product Card

**Role:** Container for product listings.

Background: Oatmeal Canvas (#f5f4ee). Padding: 16px on all sides. Border radius: 0px. No shadow. Content flows within.

### Transparent Content Card

**Role:** Card with transparent background, often used in hero or overlay contexts.

Background: transparent. Padding: 48px vertical, 16px horizontal. Border radius: 0px. No shadow. Primarily for text and internal elements.

### Text Input

**Role:** Standard form input field.

Background: Pure White (#ffffff). Text: Ink (#241f20). Border: 1px Ink (#241f20). Padding: 18px vertical, 18px left, 40px right. Border radius: 0px. Placeholder text is in a lighter neutral.

## Do's

- Prioritize FoundersGrotesk for all functional text, ensuring precise letter-spacing at different scales to maintain a compact, legible feel.
- Use TTRamillas_Light for all marketing headlines; its light weight and negative tracking provide an elegant contrast.
- Maintain a strict 0px border-radius for all component cards, badges, and primary/secondary buttons to preserve the structured, unadorned aesthetic.
- Apply Oatmeal Canvas (#f5f4ee) as the primary background for all static content areas, grounding the interface in a natural, soft tone.
- Use Deep Forest (#233735) for filled primary action buttons and Mineral Blue (#6487ba) for secondary actions; these are the core chromatic accents.
- Separate content sections with ample vertical spacing (64px sectionGap) for visual breathing room, avoiding horizontal dividers between major content blocks.
- Employ a 50% border-radius for all circular interactive elements and small ghost buttons, creating distinct visual cues.

## Don'ts

- Avoid using drop shadows on any components; the system relies on flat surfaces and clear borders for definition.
- Do not introduce new typefaces; FoundersGrotesk and TTRamillas_Light are the only approved fonts.
- Refrain from using gradients for backgrounds or components; the design emphasizes flat, solid colors.
- Do not use saturated chroma for general text or borders; stick to the neutral palette for UI elements to maintain a muted appearance.
- Avoid decorative icons or illustrations that are not rendered in Spring Bud (#8bbd78) or Sunset Orange (#ff965b); color accents are reserved and intentional.
- Do not deviate from the specified padding and margin values; the compact density is carefully calibrated.
- Never use `box-shadow` for elevation, as this design system eschews overt layering effects.

## Layout

The page primarily uses a max-width contained layout, with content centered. The hero section often features a full-bleed image with an overlaid transparent content card for text and calls to action. Sections generally maintain consistent vertical spacing, creating structured blocks of content. Feature sections commonly use a grid of cards or alternating text-left / image-right arrangements. The navigation is a classic top bar, which appears to be fixed on scroll for persistent access.

## Imagery

The imagery leans heavily on product photography and lifestyle shots featuring models. Photography is characterized by tight crops for products on white or light backgrounds, emphasizing texture and detail, and lifestyle shots showing people wearing the clothes, often with a natural, candid feel and muted lighting. The overall treatment is realistic and unretouched, celebrating authentic body shapes and natural settings. Icons are minimal, either outlined or filled in achromatic tones, with occasional accents of Spring Bud or Sunset Orange for decorative or functional purposes. The density is mixed; some sections are text-dominant, while product grids are image-heavy, balancing showcase with information.

## Similar Brands

| Business | Why |
| --- | --- |
| Kotn | Shares a focus on organic materials, muted color palettes, and a clean, product-focused e-commerce experience. |
| Everlane | Similar emphasis on essential, quality basics with an understated and transparent brand aesthetic. |
| CUUP | Utilizes a clean, white-space heavy layout with focused product photography and a minimalist typographic approach. |
| Brooklinen | Employs an achromatic visual style with an occasional soft accent color, simple product presentation, and classic typography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #241f20
background: #f5f4ee
border: #241f20
accent: #ff965b
primary action: #233735 (filled action)

Example Component Prompts:
1. Create a primary action button: background #233735, text #ffffff, 16px vertical/32px horizontal padding, 0px border-radius, FoundersGrotesk 16px weight 400.
2. Create an informative badge: background #ff965b, text #ffffff, 8px vertical/10px horizontal padding, 0px border-radius, FoundersGrotesk 13px weight 400.
3. Create a product card: background #f5f4ee, 16px padding on all sides, 0px border-radius.
4. Create a hero section: full-bleed image with an overlaid transparent card (background rgba(0,0,0,0), 48px vertical/16px horizontal padding) containing a headline in TTRamillas_Light 42px weight 400 color Ink (#241f20) and a secondary action button (background #6487ba, text #ffffff, 16px vertical/32px horizontal padding, 0px border-radius, FoundersGrotesk 16px weight 400).
5. Create a standard text input: background #ffffff, text #241f20, border 1px #241f20, 18px top/bottom/left padding, 40px right padding, 0px border-radius.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519568131-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519568131-thumb.jpg |
