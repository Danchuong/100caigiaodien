# Pally — Refero Style

- Refero URL: https://styles.refero.design/style/029d3ce0-0fe5-4a8c-99c4-4f9d704f1c60
- Site URL: https://www.pally.com
- ID: 029d3ce0-0fe5-4a8c-99c4-4f9d704f1c60
- Theme: dark
- Industry: productivity
- Created: 2026-04-30T00:11:27.330Z
- Ranks: newest: 879, popular: 266, trending: 160

> Deep space command center

## Description

Pally presents a dark-mode interface, creating a contained, focused experience. UI surfaces are predominantly deep charcoal, accented by a subtle, almost ethereal gradient for hero elements and interactive components. Typography is crisp and minimal, embracing negative tracking to maintain sophistication even at larger display sizes. Components are lightweight with large border radii, suggesting a friendly yet refined digital identity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Slate | #161e29 | neutral | Page background, primary surface for dark mode cards, text on light-mode controls |
| Ghost White | #fefcfb | neutral | Primary text color in dark mode, button backgrounds, interactive elements |
| Off-White Canvas | #eae5dd | neutral | Secondary card background color, often for featured or distinct content blocks |
| Carbon Text | #1e1d1d | neutral | Muted text, subheadings, and borders for subtle contrast |
| Faded Steel | #b8b9bc | neutral | Placeholder text, secondary body text |
| Light Steel | #d0d0d1 | neutral | Fine borders, helper text |
| Cosmic Gradient | #e9b3f2 | accent | Hero section background, decorative elements, accent glow |
| Deep Space Black | #000000 | neutral | Border color, button text when against light backgrounds |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif |  | 400 | 12px | 1.2 | sans-serif — detected in extracted data but not described by AI |
| Test Untitled Sans | Inter | 400 | 19px | 1.00 | Primary brand typeface for headings and body text. Its subtle negative tracking across multiple sizes creates a serious yet inviting tone. |
| Inter | Inter | 500 | 14px | 1.40 | Used for specific interactive elements such as navigation links, providing a slightly more structured feel. |
| Test Untitled Sans Regular |  | 400 | 14px, 16px, 18px, 24px, 26px, 28px, 48px, 64px | 0.9, 1, 1.1, 1.2, 1.4 | Test Untitled Sans Regular — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body-sm | 14 | 1.4 |  |
| body | 16 | 1.2 | -0.32 |
| subheading | 18 | 1.1 | -0.36 |
| heading-sm | 24 | 1.1 | -0.48 |
| heading | 28 | 1.1 | -0.56 |
| heading-lg | 48 | 1 | -1.92 |
| display | 64 | 0.9 | -3.84 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "images": "12px",
    "buttons": "100px",
    "formFields": "100px"
  },
  "elementGap": "10px",
  "sectionGap": "80px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Primary Waitlist Button

**Role:** Button

Ghost White (#fefcfb) background with Deep Space Black (#000000) text. Padding of 10px vertical and 16px horizontal. Features a large 100px border radius for a distinctive pill shape.

### Dark Mode Card

**Role:** Card

Midnight Slate (#161e29) background with a 12px border radius. Used for product UI elements and informational blocks within the dark theme.

### Light Mode Feature Card

**Role:** Card

Off-White Canvas (#eae5dd) background with a 12px border radius. Used for emphasizing key features or content in a lighter context against the dark page background.

### Navigation Link

**Role:** Link

Faded Steel (#b8b9bc) text (weight 500 Test Untitled Sans) with 5px vertical padding, becoming Ghost White (#fefcfb) on hover.

## Do's

- Prioritize Midnight Slate (#161e29) for all primary background surfaces to maintain the deep, dark aesthetic.
- Apply negative letter-spacing from the Test Untitled Sans font to all headlines and display text, specifically -0.0600em for 64px and -0.0400em at 48px, for a sophisticated feel.
- Use a 100px border-radius for all interactive buttons and form fields to create a consistent soft, pill-shaped UI element.
- Employ the Cosmic Gradient (linear-gradient rgb(233, 179, 242) 22%, rgb(152, 104, 204) 74%, rgb(95, 77, 189) 100%) for impactful hero sections and subtle brand highlights.
- Maintain a clear visual hierarchy using Ghost White (#fefcfb) for primary text and Midnight Slate (#161e29) for primary backgrounds in dark mode, ensuring strong contrast (16.4:1 ratio).

## Don'ts

- Avoid using bright, saturated colors for large UI elements; color should serve as subtle accent or dynamic interactive effects, not primary surface color.
- Do not deviate from the established large border radii (100px for buttons, 12px for cards); sharp corners conflict with the brand's soft, modern aesthetic.
- Do not use generic, default sans-serif fonts; custom font 'Test Untitled Sans' with its specific tracking is crucial for brand identity.
- Avoid adding heavy shadows or excessive elevation; the design relies on subtle gradients and distinct surface colors for depth.
- Do not use small, dense line heights for body text; ensure adequate line-height for readability, especially with the negative letter-spacing.

## Layout

The page primarily uses a full-bleed layout for the main background (Midnight Slate), which is then overlaid with a contained max-width content area for text and components. The hero section features a centered headline and subtext, often against an atmospheric gradient background. Content sections flow vertically with consistent 80px section gaps. There's a subtle use of a two-panel layout for feature explanations, alternating content left/right. The header is sticky, compact, and centrally aligned, providing essential navigation.

## Imagery

This design system uses abstract, blurred organic shapes for atmosphere, often with gradients (Cosmic Gradient). Product screenshots are integrated directly, appearing as floating UI elements on the dark background, maintaining the dark mode aesthetic within the product visuals themselves. Icons, when present, are subtly glowing or outlined. Imagery is used to set a mood and illustrate product functionality in a non-literal, atmospheric way rather than showing direct product-in-use photography. The density of imagery is balanced, with a few key visuals commanding attention against otherwise minimalist UI.

## Similar Brands

| Business | Why |
| --- | --- |
| Superhuman | Dark-mode interface with a focus on productivity, subtle gradients, and minimalist typography. |
| Linear | Combines a dark background with crisp, understated UI elements and a focus on polished functionality. |
| Cron | Modern dark UI with subtle color accents and clean typography for a professional, focused application. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #fefcfb
background: #161e29
border: #000000
accent: #e9b3f2 (start of Cosmic Gradient)
primary action: no distinct CTA color

Example Component Prompts:

1. Create a Hero Section: Use the Cosmic Gradient background (linear-gradient rgb(233, 179, 242) 22%, rgb(152, 104, 204) 74%, rgb(95, 77, 189) 100%). Headline: 'Stop drowning in DMs.' (display, Test Untitled Sans, #fefcfb, weight 400, letter-spacing -3.84px). Subtext: 'All your chats and all your pals from every platform.' (body, Test Untitled Sans, #fefcfb, weight 400, line-height 1.2).

No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.

3. Create a Dark Mode Feature Card: Background: Midnight Slate (#161e29). Border radius: 12px. Headline: 'Unified Messaging Inbox' (heading-sm, Test Untitled Sans, #fefcfb, weight 400, letter-spacing -0.48px). Body text: 'All your chats' (body, Test Untitled Sans, #b8b9bc, weight 400).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777507867826-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777507867826-thumb.jpg |
