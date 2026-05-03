# Koox — Refero Style

- Refero URL: https://styles.refero.design/style/d1ca41ff-1bcc-4081-b1fd-bdcf380ba749
- Site URL: https://koox.co.uk
- ID: d1ca41ff-1bcc-4081-b1fd-bdcf380ba749
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:03:21.722Z
- Ranks: newest: 241, popular: 854, trending: 804

> kitchen laboratory blueprint

## Description

Koox establishes a raw, organic aesthetic through high-contrast typography, distinct dark neutrals, and stark rectangular forms. The design relies on photography of ingredients and products set against a simple white tiled background, creating a kitchen laboratory feel. Accent colors are earthy and bold, used sparingly to highlight primary actions or calls to attention against the dominant monochrome palette.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Noir | #000000 | neutral | Primary text, navigation links, bold headings, borders, button text on light backgrounds — a stark, graphic black |
| Tile White | #ffffff | neutral | Content surfaces, card backgrounds, input fields, navigation background. A clean, crisp white that mimics tiled surfaces |
| Laboratory Gray | #efefef | neutral | Subtle background for varied content sections, secondary card backgrounds, creates a slight elevation from white |
| Deep Forest | #113722 | brand | Primary action button background, representing natural ingredients and brand's organic ethos |
| Spiced Orange | #d25a24 | accent | Highlight accents for links, badges, and attention-grabbing elements, adding a natural, vibrant pop |
| Berry Rouge | #6b1229 | accent | Secondary action button background and shadow for key interactive elements, a warm, rich accent |
| Charcoal Text | #232323 | neutral | Secondary text for headings and content, slightly softer than Midnight Noir but maintaining strong contrast |
| Border Gray | #cccccc | neutral | Subtle borders and dividers for UI elements, less prominent than Midnight Noir borders |
| Input Border | #d7d7d7 | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Placeholder Gray | #646464 | neutral | Placeholder text in input fields, softer visibility |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Helvetica | Arial | 400, 500, 600, 700, 900 | 14px, 16px, 18px, 20px, 24px, 26px, 30px, 32px, 40px, 46px, 48px | 0.70, 0.80, 0.88, 1.00, 1.03, 1.10, 1.20, 1.30, 1.38, 1.44, 1.50, 1.57, 1.63, 1.71, 1.75, 1.79, 2.19, 2.50 | Primary typeface for all text types, from body to large headings. Its clean, sans-serif nature provides a modern, legible base for conveying product information and brand messaging. The wide range of weights supports a clear typographic hierarchy. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.44 |  |
| body-sm | 16 | 1.44 |  |
| body | 20 | 1.44 |  |
| body-lg | 24 | 1.3 |  |
| heading-sm | 26 | 1.3 |  |
| heading | 30 | 1.3 |  |
| heading-lg | 40 | 1.3 |  |
| display-sm | 46 | 1.3 |  |
| display | 48 | 1.3 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "5px",
    "links": "5px",
    "lists": "5px",
    "inputs": "0px",
    "buttons": "0px"
  },
  "elementGap": "20px",
  "sectionGap": "27px",
  "cardPadding": "20px",
  "pageMaxWidth": "1800px"
}
```

## Components

### Primary Action Button

**Role:** Main call-to-action button, directing users to core functions.

Filled button with 'Deep Forest' background (#113722), 'Tile White' text, no border radius, 11px vertical padding, 15px horizontal padding. Delivers a bold, grounded aesthetic.

### Secondary Action Button

**Role:** Alternative call-to-action, visually distinct but still impactful.

Filled button with 'Berry Rouge' background (#6b1229), 'Tile White' text, no border radius, 11px vertical padding, 15px horizontal padding. A distinct color for different types of actions.

### Text Link Button

**Role:** Minimal interactive element, appearing as simple text.

Transparent background, 'Midnight Noir' text, no padding or borders. Used for navigation and less prominent actions.

### Product Card

**Role:** Container for product listings or category previews.

Transparent background, 0px border radius, no box shadow, 0px padding. Image-driven cards without visual chrome.

### Input Field

**Role:** Standard form input element.

Background 'Tile White', text 'Placeholder Gray' (#646464), 'Input Border' (#d7d7d7) 1px solid border, no border radius, 11px vertical padding, 15px horizontal padding.

## Do's

- Use 'Midnight Noir' (#000000) for all primary text and strong headings to maintain high contrast and graphic clarity.
- Apply 'Deep Forest' (#113722) exclusively to primary call-to-action button backgrounds for immediate visual recognition.
- Maintain a 0px border radius for all buttons and input fields to support the sharp, utilitarian aesthetic.
- Employ 'Spiced Orange' (#d25a24) as a judicious accent for links, special offers, or badges to draw specific attention without overwhelming the design.
- Utilize Helvetica 900 for hero headlines and important section titles to convey authority and directness.
- Ensure all product imagery or visual content is set against a 'Tile White' (#ffffff) background or visual equivalent to maintain the laboratory aesthetic.
- Use a base padding of 15px for horizontal spacing within interactive elements and text blocks.

## Don'ts

- Do not use subtle gradients or soft drop shadows, as they contradict the stark and raw visual language.
- Avoid using multiple accent colors in close proximity; the system relies on a single, focused chromatic pop.
- Do not introduce rounded corners for primary UI elements like buttons or cards, as the design emphasizes sharp, clean edges.
- Refrain from using light gray text on light gray backgrounds; prioritize high contrast with 'Midnight Noir' or 'Charcoal Text'.
- Do not use decorative background patterns beyond the implied 'Tile White' base; surfaces should remain clean and uniform.
- Avoid excessive spacing between elements that are functionally related; maintain a comfortable but not overly airy density.
- Do not introduce highly saturated imagery that clashes with the muted, natural tones of the primary brand accents.

## Similar Brands

| Business | Why |
| --- | --- |
| Oatly | Uses bold, sans-serif typography, stark layouts, and focuses on core product visuals with minimal decorative elements. |
| Daily Harvest | Features clean product photography against simple backgrounds, emphasizing natural ingredients and a fresh aesthetic. |
| Soylent | Employs a utilitarian and direct visual style with clear product shots and a focus on essential information. |
| Huel | Combines a monochrome base with one or two strong accent colors for calls to action, maintaining a clean and functional interface. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #cccccc
accent: #d25a24
primary action: #6b1229 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #6b1229 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a Product Card: Transparent background, 5px radius, no shadow, 0px padding, with a 'Midnight Noir' (#000000) heading (Helvetica 700, 24px) for the product name.
3. Create an Input Field: 'Tile White' background, 'Input Border' (#d7d7d7) 1px solid border, 0px radius, 'Placeholder Gray' (#646464) text, Helvetica 400 16px, 11px vertical padding, 15px horizontal padding.
4. Create a Section Heading: 'Midnight Noir' (#000000) text, Helvetica 900, 48px, line-height 1.03, letter-spacing 0.05em, centered on a Laboratory Gray (#efefef) background with 27px top and bottom section padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518179364-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518179364-thumb.jpg |
