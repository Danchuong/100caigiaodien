# Arcade — Refero Style

- Refero URL: https://styles.refero.design/style/f65b0b91-bdd1-458d-8775-2f6fa8a9d4b1
- Site URL: https://arcade.software
- ID: f65b0b91-bdd1-458d-8775-2f6fa8a9d4b1
- Theme: light
- Industry: design
- Created: 2026-03-17T19:14:43.000Z
- Ranks: newest: 1030, popular: 41, trending: 196

> Crisp Blueprint on White Canvas. Clean surfaces frame sharp typography and a singular, vibrant blue, like a detailed architectural plan on a clear white sheet, accented by a distinct highlight.

## Description

Arcade presents a composed, polished aesthetic, prioritizing clarity and directness. The dominant whites and near-grayscale elements are punctuated by a single, vibrant blue, focusing attention and directing interaction. Subtle shadows build hierarchy and give a tactile quality to elements, making the UI feel grounded and precise. The generous use of rounded corners softens the otherwise direct typography, creating an accessible but authoritative tone.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, button backgrounds, primary text on dark elements. |
| Whisper Gray | #f9fafb | neutral | Subtle background for UI elements and slight section differentiation. |
| Outline Ash | #e5e7eb | neutral | Primary border color for buttons and input fields, indicating interactive boundaries. |
| Graphite Text | #111827 | neutral | Primary text color for headings and body, offering high contrast against light backgrounds. Also used as background for dark sections and button text on light buttons. |
| Slate Text | #4b5563 | neutral | Secondary text color for body copy, subheadings, and muted links. Provides visual hierarchy by being less dominant than Graphite Text. |
| Silver Text | #374151 | neutral | Decorative text in navigation and links. A slightly lighter nuance than Slate Text. |
| Steel Accent | #70747d | neutral | Subtle secondary text, border colors, and subtle button states, providing softer visual cues. |
| Arcade Blue | #2142e7 | brand | Primary brand color for calls to action, active states, and focus indicators. Its vivid nature stands out against the muted neutral palette. |
| Deep Blue Shadow | #182fa5 | brand | Darker shade of Arcade Blue used for button borders and subtle shadows, adding depth to interactive elements. |
| Dark Gradient Base | #111827 | brand | Base color for complex background gradients, often appearing in hero sections or prominent content blocks. Paired with gradient accents. |
| Blue Gradient Accent | #2142e7 | brand | Vivd blue accent within gradients, creating dynamic energy within dark sections, used in banners and hero elements. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 500, 600, 700 | 12px, 14px, 16px, 18px, 20px, 24px, 28px, 30px, 36px, 40px, 48px, 64px | 1.00, 1.06, 1.07, 1.14, 1.17, 1.22, 1.25, 1.29, 1.30, 1.33, 1.38, 1.40, 1.43, 1.50, 1.56, 1.67, 1.71 | The primary typeface for all text content, from headings to body. Its strong legibility and slightly condensed nature support an efficient, clear communication style. Heavier weights (600, 700) are reserved for key titles, while lighter weights (400, 500) serve body and secondary information. |
| Balig Script | cursive | 400 | 40px | 1.00 | A decorative script font used sparingly for unique brand-specific elements or signatures, providing a touch of personalized flair. It contrasts with Inter's utilitarianism to add personality without compromising overall clarity. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | 0 |
| body-sm | 14 | 1.43 | 0 |
| body | 16 | 1.5 | 0 |
| subheading | 18 | 1.56 | 0 |
| heading-sm | 24 | 1.33 | -0.48 |
| heading | 36 | 1.25 | -0.36 |
| heading-lg | 48 | 1.17 | -0.96 |
| display | 64 | 1.07 | -1.6 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "inputs": "16px",
    "buttons": "12px",
    "decorative": "24px",
    "large-actions": "72px"
  },
  "elementGap": "8px",
  "sectionGap": "96px",
  "cardPadding": "48px",
  "pageMaxWidth": "1304px"
}
```

## Components

### Hero URL Input with Tab Selector



### Team Tab Selector with Feature List



### CTA Button Group



### Secondary Outlined Button

**Role:** Secondary Action

Canvas White (#ffffff) background with Graphite Text (#111827) text. Border Outline Ash (#e5e7eb) and radius 12px. Padding 10px vertical, 16px horizontal. Offers a less prominent action option.

### Ghost Button

**Role:** Navigation & Tertiary Action

Transparent background with Steel Text (#70747d) text. Borders are invisible, radius 12px. Padding 10px vertical, 16px horizontal. Used for less emphasized actions or navigation items that are not primary CTAs.

### Action Input Field

**Role:** User Input with Action

Canvas White (#ffffff) background with Outline Ash (#e5e7eb) border. Text color is Graphite Text (#111827). Radius 16px. Left padding 16px, right padding 114px for an integrated button. Designed for primary data entry with an immediate associated action.

### Text Input Field

**Role:** Standard User Input

Transparent background with Graphite Text (#111827) text. Border color is default, radius 0px. Minimal padding, implying a simpler, integrated-text input.

### Header Navigation Link

**Role:** Primary Navigation

Silver Text (#374151) for default state, transitions to Graphite Text (#111827) or Arcade Blue (#2142e7) on hover/active. Radius 12px for interactive regions. Text style Inter, weight 500, size 16px. Part of the main site navigation.

### Status Chip

**Role:** Informational Badge

Whisper Gray (#f9fafb) background with radius 8px. Text Graphite Text (#111827), Inter, weight 500, size 14px. Padding 4px vertical, 8px horizontal. Used for small informative labels or categories.

### Feature Card

**Role:** Content Grouping

Transparent background, no specific border or shadow. Radius 0px. Padding 0px. Primarily used for visual segmentation of content without imposing heavy visual boundaries.

## Do's

- Prioritize Inter font for all text elements, leveraging weights 400-700. Reserve Balig Script for highly decorative brand elements if necessary, ensuring it never competes with Inter for readability.
- Use Arctic White (#ffffff) as the base background for most sections, broken by Whisper Gray (#f9fafb) for subtle differentiation, making content feel spacious and clear.
- Apply Arcade Blue (#2142e7) exclusively to primary calls to action and active states, ensuring high visibility and clear user pathways.
- Utilize border radii of 12px for buttons and navigation items, and 16px for input fields and general components, creating a soft but not overly rounded aesthetic.
- Implement consistent letter spacing: -0.0250em for 64px, -0.0200em for 48px, -0.0150em for 40px, -0.0100em for 36px and 30px, and -0.0070em for 28px and 24px, optimizing legibility for larger text.
- Apply subtle elevation provided by rgba(17, 24, 39, 0.04) box shadows to interactive elements and cards, giving a sense of depth and hierarchy without being heavy.

## Don'ts

- Do not introduce new vibrant colors outside of the defined Arcade Blue (#2142e7) palette; maintain the controlled use of color to avoid visual clutter.
- Avoid using harsh, abrupt transitions or sharp angles. Leverage the established border radii (12px, 16px, 72px) to maintain the soft, approachable feel.
- Do not use dark backgrounds for general body text sections; preserve the light-themed composition for readability and a composed appearance.
- Refrain from excessive use of gradient backgrounds. Limit them to hero sections or distinct banners to maintain their impact.
- Do not deviate from the specified typography scale and letter spacing values. Inconsistent typography disrupts the visual rhythm and perceived quality.
- Avoid arbitrary padding values; stick to the defined spacing scale (4px, 8px, 10px, 12px, 16px, 24px, 32px, 40px, 48px), especially for component internal spacing.

## Layout

The site employs a centered, max-width layout (1304px) for most content, providing a sense of order and focus. The hero section breaks this somewhat, featuring a full-width background gradient contrasted with a centered text block and an interactive input field. Sections generally maintain a consistent vertical spacing of 96px, with alternating content arrangements: either text stacked with a visual below, or a two-column layout with text on one side and a product image/visual on the other, creating a clear and scannable rhythm. Navigation is a sticky top bar with branding, links, and prominent calls to action.

## Imagery

This site uses product screenshots and abstract gradients. Product screenshots are typically presented as contained UI shots, sometimes with a subtle glow or frame, without full-bleed integration. The abstract gradients are vibrant blue organic shapes, soft-edged and contained to specific background sections like the hero or decorative elements, creating a dynamic, modern feel without sharp graphical elements. Icons are filled, mono-color SVG in the Graphite Text (#111827) color, often appearing in feature lists or interactive elements.

## Elevation

| Element | Style |
| --- | --- |
| Card / Elevated Panel | rgba(17, 24, 39, 0.2) 0px 8px 8px 0px, rgba(17, 24, 39, 0.1) 0px 4px 4px 0px, rgba(17, 24, 39, 0.1) 0px 2px 2px 0px, rgba(17, 24, 39, 0.1) 0px 0px 0px 1px, rgba(255, 255, 255, 0.06) 0px 0px 0px 1px inset, rgba(255, 255, 255, 0.06) 0px 1px 0px 0px inset |
| Subtle UI Element | rgba(17, 24, 39, 0.12) 0px 0px 0px 1px, rgba(17, 24, 39, 0.03) 0px 2px 2px -2px, rgba(17, 24, 39, 0.03) 0px 4px 4px 0px, rgba(17, 24, 39, 0.03) 0px 8px 8px 0px, rgba(17, 24, 39, 0.03) 0px 16px 16px 0px |
| Button (Normal) | rgba(17, 24, 39, 0.04) 0px 32px 32px 0px, rgba(17, 24, 39, 0.04) 0px 16px 16px 0px, rgba(17, 24, 39, 0.04) 0px 8px 8px 0px, rgba(17, 24, 39, 0.04) 0px 4px 4px -2px, rgba(17, 24, 39, 0.04) 0px 2px 2px -1px, rgba(17, 24, 39, 0.16) 0px 0px 0px 1px |
| Button (Hover/Focus) | rgba(17, 24, 39, 0.05) 0px 32px 32px 0px, rgba(17, 24, 39, 0.05) 0px 16px 16px 0px, rgba(17, 24, 39, 0.05) 0px 8px 8px 0px, rgba(17, 24, 39, 0.05) 0px 4px 4px 0px, rgba(17, 24, 39, 0.05) 0px 2px 2px -2px, rgba(17, 24, 39, 0.1) 0px 0px 0px 1px |
| Primary Button (with border shadow) | rgba(17, 24, 39, 0.04) 0px 32px 32px 0px, rgba(17, 24, 39, 0.04) 0px 16px 16px 0px, rgba(17, 24, 39, 0.04) 0px 8px 8px 0px, rgba(17, 24, 39, 0.04) 0px 4px 4px -2px, rgba(17, 24, 39, 0.04) 0px 2px 2px -1px, rgb(24, 47, 165) 0px 0px 0px 1px |

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Both use a minimalist, high-contrast UI with a single vibrant accent color (blue/purple) against a neutral palette, emphasizing clarity and functionality. |
| Vercel | Shares the clean aesthetic, dominant white backgrounds, and strategic use of subtle shadows and gradients in hero sections to add depth without clutter. |
| Framer | Exhibits a similar approach to systematic typography, using Inter as a core font and prioritizing clear text hierarchy with precise letter spacing and line heights. |
| Stripe | Utilizes a balanced layout with generous white space paired with functional, well-defined components and a focus on polished product visuals within the UI. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (Primary): #111827
- Text (Secondary): #4b5563
- Background (Primary): #ffffff
- Background (Subtle): #f9fafb
- CTA Button: #2142e7
- Border (Neutral): #e5e7eb

### 3 Example Component Prompts
1. Create a primary hero section: full-width background gradient (linear: rgb(17,24,39) to rgba(30,43,72,0.9)). Centered headline 'Your product story, built by AI in minutes.' (Inter, 64px, weight 700, #111827, letter-spacing -1.6px). Below, a subheading 'Create beautiful, on-brand demos...' (Inter, 20px, weight 400, #4b5563). Below that, an 'Action Input Field' component (Canvas White background, Outline Ash border, 72px radius) with placeholder text, and an integrated 'Arcade Blue' submit button.
2. Design a secondary button: 'Talk to sales', Ghost Button variant, with Steel Text (#70747d) color, Inter font, 16px size, weight 500. Padding 10px vertical, 16px horizontal, 12px radius. No visible border.
3. Create a feature testimonial card: Whisper Gray (#f9fafb) background. Main text: 'Arcade makes every format effortless.' (Inter, 36px, weight 600, #111827, letter-spacing -0.36px). Apply a subtle UI elevation shadow: rgba(17, 24, 39, 0.12) 0px 0px 0px 1px, rgba(17, 24, 39, 0.03) 0px 2px 2px -2px, rgba(17, 24, 39, 0.03) 0px 4px 4px 0px, rgba(17, 24, 39, 0.03) 0px 8px 8px 0px, rgba(17, 24, 39, 0.03) 0px 16px 16px 0px. Ensure the card has a 16px radius and 48px padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932692576-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932692576-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/f65b0b91-bdd1-458d-8775-2f6fa8a9d4b1-1777556058465-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/f65b0b91-bdd1-458d-8775-2f6fa8a9d4b1-1777556058465-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/f65b0b91-bdd1-458d-8775-2f6fa8a9d4b1-1777556058465-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/f65b0b91-bdd1-458d-8775-2f6fa8a9d4b1-1777556058465-preview-detail-poster.jpg |
