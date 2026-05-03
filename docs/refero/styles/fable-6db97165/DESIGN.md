# Fable — Refero Style

- Refero URL: https://styles.refero.design/style/6db97165-78a2-4953-9d93-281f6a8f58aa
- Site URL: https://fablepets.com
- ID: 6db97165-78a2-4953-9d93-281f6a8f58aa
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:08:02.130Z
- Ranks: newest: 223, popular: 969, trending: 824

> Warm Scandi elegance

## Description

Fable crafts a comforting, refined aesthetic for pet products. It blends warm, inviting neutrals with a singular, muted blue accent that signals interactivity without harshness. Typography is precise and legible, complementing detailed product imagery and subtle illustrative elements. The system emphasizes soft surfaces and rounded edges, creating a gentle, approachable feel for a premium brand.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #030e28 | brand | Primary text, prominent headings, critical icon details, dark borders — establishes authority and contrast |
| Sky Dust | #b0c7fa | brand | Primary action backgrounds, interactive elements, subtle accent washes — a soft, inviting blue that feels approachable |
| Mist Bloom | #dbddff | brand | Subtle background accents, decorative elements, hero section backgrounds — a very light, cool-tinted neutral |
| Spring Bud | #c9fd5b | accent | Green action color for filled buttons, selected navigation states, and focused conversion moments |
| Ocean Glimmer | #2563ed | accent | Interactive link text, secondary link borders, subtle visual highlights — a vivid, functional blue |
| Canvas | #faf8f5 | neutral | Page background, foundational light surface |
| White Linen | #ffffff | neutral | Base surface for cards, input fields, prominent UI elements, subtle borders |
| Cloud Gray | #f7f7f7 | neutral | Secondary surface for card backgrounds and subtle section separators |
| Deep Graphite | #232323 | neutral | Strong secondary text, bold borders, accent details |
| Pitch Black | #000000 | neutral | Heading text, primary icons, outline borders, strong contrast elements |
| Light Grille | #eeeeee | neutral | Hairline separators and subtle borders |
| Shadow Fog | #7c7f85 | neutral | Muted body text, secondary text, placeholder text, border accents |
| Stone Slate | #dbdddf | neutral | Badge borders, subtle dividers |
| Cool Ash | #515357 | neutral | Detailed body text, secondary informational text, supporting link states |
| Quartz Dust | #b7b7b9 | neutral | Input field borders, lightest gray for background tints |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Moderat | system-ui, sans-serif | 300, 400, 500, 700 | 9px, 10px, 11px, 12px, 13px, 14px, 15px, 16px, 18px | 1.00, 1.25, 1.29, 1.33, 1.38, 1.50, 1.54, 1.60, 1.63, 2.14 | UI elements, body copy, captions, buttons, and detailed content. Its consistent tracking ensures clarity across various compact applications. |
| Gelica | Georgia, serif | 300, 400, 500 | 18px, 22px, 24px, 28px, 32px, 40px, 60px | 1.00, 1.25, 1.50 | Headlines and prominent display text. Its distinct character and tighter letter-spacing at larger sizes give it a sophisticated, editorial presence. |
| Font Awesome 5 Pro |  | 300 | 18px | 1 | Font Awesome 5 Pro — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1.5 | 0.18 |
| subheading | 18 | 1.5 | 0.16 |
| heading | 28 | 1.25 | 0.17 |
| display | 60 | 1 | -0.6 |

## Spacing & Shape

```json
{
  "radius": {
    "pills": "9999px",
    "buttons": "4px",
    "default": "2px"
  },
  "elementGap": "16px",
  "sectionGap": "64px",
  "cardPadding": "16px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Primary Filled Button

**Role:** Key calls to action

Background: Sky Dust (#b0c7fa), Text: Midnight Ink (#030e28), Border Radius: 4px, Padding: 10px vertical, 15px horizontal. Uses Moderat font.

### Ghost Button

**Role:** Secondary actions, navigation links

Background: transparent, Text: Midnight Ink (#030e28), Border: 1px solid Midnight Ink (#030e28), Border Radius: 4px, Padding: variable. Uses Moderat font.

### Pill Button

**Role:** Tertiary filters or tags

Background: transparent or Sky Dust (#b0c7fa) on hover, Text: Midnight Ink (#030e28), Border Radius: 9999px (full capsule), Padding: variable. Uses Moderat font.

### Product Card

**Role:** Displaying individual products

Background: Cloud Gray (#f7f7f7), Border Radius: 2px, No box shadow, Padding: 16px. Imagery fills the top portion, text below.

### Minimal Card

**Role:** Content grouping without strong visual emphasis

Background: transparent, Border Radius: 2px, No box shadow, Padding: 16px. Often used for testimonial blocks or simple image containers.

### Input Field

**Role:** User data entry

Background: White Linen (#ffffff), Border: 1px solid Quartz Dust (#b7b7b9), Border Radius: 0px, Padding: 0px vertical, 12px horizontal. Text: Midnight Ink (#030e28).

### Best Seller Badge

**Role:** Highlighting popular products

Background: Spring Bud (#c9fd5b), Text: Deep Graphite (#232323), Border Radius: 0px, Padding: small, inline with content. Uses Moderat font.

## Do's

- Use Midnight Ink (#030e28) for all primary text and critical UI outlines to maintain brand identity.
- Apply Sky Dust (#b0c7fa) for primary call-to-action button backgrounds, ensuring a consistent interactive feel.
- Maintain a default border radius of 2px for cards and containers, and 4px for interactive buttons.
- Utilize Moderat for all UI elements and body text, with precise letter-spacing as per type scale for optimal legibility.
- Employ Gelica for headlines and display text, prioritizing its distinct character and larger sizes for impactful messaging.
- Structure layouts using a 1200px max-width content container, centered on the page for visual stability.
- Ensure section gaps are consistently 64px to create comfortable breathing room between content blocks.

## Don'ts

- Avoid using multiple chromatic colors for primary actions; reserve Sky Dust (#b0c7fa) for this role.
- Do not introduce sharp corners or excessively large radii; adhere to the established 2px and 4px radii.
- Refrain from heavy shadows or strong elevation; opt for minimal, subtle elevation when necessary.
- Do not deviate from the defined letter-spacing values for Moderat and Gelica fonts; precise tracking is critical.
- Avoid using purely black (#000000) for body text; reserve it for headings and high-contrast icons.
- Do not use gradients unless explicitly defined; the system relies on solid colors for clear, understated design.
- Avoid dense, text-heavy sections without image support; integrate product visuals or illustrations frequently.

## Layout

The site employs a primarily contained layout, utilizing a central 'pageMaxWidth' of 1200px. Sections often alternate between full-width background bands (like the green testimonial section) and content constrained within the max-width. The hero section frequently combines a large, dynamic hero image (often full-bleed or near full-bleed) with a prominent headline and primary call-to-action. Content arrangement features a strong vertical rhythm with consistent section gaps of 64px. Product listings use a responsive grid, typically 3 columns. Navigation is a sticky top bar with clear links and utility icons.

## Imagery

The visual language blends detailed product photography with light, whimsical line-art illustrations. Product shots are typically tight crops, often presented on pure white or light gray backgrounds, emphasizing the object itself. Lifestyle photography, when present, maintains a clean, natural light aesthetic. Illustrations are sparse, organic, monochrome line drawings — often depicting interactions between owners and pets, serving as decorative and explanatory content, adding a touch of playful warmth. Icons are outlined, simple, and functional, primarily monochrome or using accent colors. The overall density is balanced, allowing imagery to break up text-heavy sections and add visual interest.

## Elevation

| Element | Style |
| --- | --- |
| Button/Card | rgba(0, 0, 0, 0.04) 0px 4px 8px 0px, rgba(0, 0, 0, 0.06) 0px 0px 2px 0px, rgba(0, 0, 0, 0.04) 0px 0px 1px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Our Place | Shares a warm, inviting neutral palette with a singular accent color and focus on high-quality product photography. |
| Brooklinen | Similar approach to soft, comfortable branding through subdued color palettes and sophisticated typography for home goods. |
| Allbirds | Utilizes a clean, product-focused aesthetic with muted natural tones and a clear, approachable UI. |
| Native Deodorant | Employs a light, airy design with rounded elements and a natural color scheme to convey a premium, gentle product. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
text: #030e28
background: #faf8f5
border: #dbdddf
accent: #b0c7fa
primary action: #b0c7fa (filled action)

**Example Component Prompts:**
1. Create a Primary Action Button: #b0c7fa background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design a `Product Card` for 'The Puffin™ Game' with an image, title, and a 'Best Seller Badge'.
3. Implement a `Ghost Button` for 'See Details' next to product information.
4. Produce an `Input Field` for an email address, labeled 'Your Email'.
5. Generate a section header using Gelica font, weight 400, size 40px, letter-spacing 0.16px, color #000000, with body text below it using Moderat font, weight 400, size 14px, letter-spacing 0.18px, color #030e28.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518459992-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518459992-thumb.jpg |
