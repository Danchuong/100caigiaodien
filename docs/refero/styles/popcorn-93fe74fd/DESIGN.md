# Popcorn — Refero Style

- Refero URL: https://styles.refero.design/style/93fe74fd-bac8-4d13-9d5b-3b5e242f74e6
- Site URL: https://popcorn.space
- ID: 93fe74fd-bac8-4d13-9d5b-3b5e242f74e6
- Theme: light
- Industry: other
- Created: 2026-04-30T00:21:07.844Z
- Ranks: newest: 826, popular: 1284, trending: 1279

> Monochrome canvas, silent authority

## Description

Popcorn employs a modern, calm, and spacious aesthetic built on a largely monochrome palette. Light, soft surfaces and ample white space define the visual canvas. Typography is characteristically bold yet airy for headlines, conveying information with subtle authority, while body text remains minimal and legible. Small, rounded components with soft shadows and transparent accents give an impression of lightness and approachability.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Graphite | #393737 | neutral | Primary text, headline text, dark surface backgrounds for contrast, navigation links, primary icon color; Overlays or background fills for sections that require heavy contrast, used sparingly for strong visual separation |
| Canvas White | #f7f7f7 | neutral | Dominant page background, soft button backgrounds, subtle surface details, light badge backgrounds |
| Snow Drift | #ffffff | neutral | Card backgrounds, elevated UI elements, navigation backgrounds |
| Slate Mist | #888787 | neutral | Secondary text, muted helper text, inactive navigation items, subtle border colors |
| Pale Cloud | #e9eff6 | neutral | Subtle alternative card background for visual separation, delicate UI accents |
| Gradient Aura | #e7f3ee | accent | Background illustrations, subtle decorative elements suggesting depth and iridescence. Represents the cool-toned starting point of a complex conic gradient |
| Skylight Fade | #dae8f5 | accent | Subtle background gradients for atmospheric effects, suggesting depth and height |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Messina Sans | Inter | 400, 600, 700 | 11px, 13px, 14px, 16px, 18px, 19px, 64px, 88px | 1.00, 1.20, 1.40, 1.50 | Primary UI font for body text, button labels, navigation, and smaller headings. The range of weights and granular sizes supports a precise textual hierarchy across the interface. |
| Untitled Serif | Freight Text Pro | 400 | 20px, 22px, 24px, 30px, 40px, 58px, 84px | 1.00, 1.20 | Dedicated serif font for large, impactful headlines, subheadings, and decorative text. Its single weight and careful tracking give it a refined presence. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| subheading | 19 | 1.4 | -0.38 |
| heading-sm | 24 | 1.2 |  |
| heading | 40 | 1.2 | -1 |
| heading-lg | 58 | 1.2 | -1.74 |
| display | 88 | 1.2 | -2.64 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "badges": "100px",
    "buttons": "100px",
    "largeElements": "64px"
  },
  "elementGap": "16px",
  "sectionGap": "64px",
  "cardPadding": "18px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Primary Ghost Button

**Role:** Action button for primary calls to action, maintaining lightness and integrating into the design.

Background: rgba(247, 247, 247, 0.6), Text color: #393737, Border Top: rgba(255, 255, 255, 0.6), Border Radius: 100px, Padding: 13px vertical, 18px horizontal. Uses Messina Sans 16px.

### Elevated Feature Card

**Role:** Highlights key features or testimonials, using soft elevation to draw attention.

Background: #ffffff, Border Radius: 12px, Box Shadow: rgba(0, 0, 0, 0.05) 0px 4px 20px 0px, Padding: 18px on all sides. Content spacing of 16px.

### Base Feature Card

**Role:** Standard card for displaying information without strong visual hierarchy.

Background: #ffffff, Border Radius: 15px, No shadow, Padding: 34px top, 0px horizontal, 0px bottom.

### Badge Pill

**Role:** Categorization or status indicator.

Background: #f7f7f7, Text color: #393737, Border Radius: 100px, Padding: 10px vertical, 14px horizontal internally, 10px leading graphic padding. Uses Messina Sans 14px.

### Hero Pill Badge

**Role:** Prominent status indicator within hero sections.

Background: rgba(0, 0, 0, 0), Text color: #393737, Border Radius: 100px, Padding: 7px vertical, 16px horizontal leading, 7px right. Uses Messina Sans 14px.

### Navigation Link

**Role:** Primary navigation elements.

Text color: #393737, Messina Sans 16px, 10px horizontal padding, 12px vertical padding. Active state indicated by an underline.

## Do's

- Use Midnight Graphite (#393737) for all primary text and main headlines.
- Apply Canvas White (#f7f7f7) for the main page background and soft button fills.
- Ensure all primary interactive elements like buttons and badges use a 100px border radius for a continuous pill shape.
- Implement the soft shadow rgba(0, 0, 0, 0.05) 0px 4px 20px 0px for all elevated cards to maintain a light visual weight.
- Reserve Untitled Serif for headlines and subheadings at larger sizes (40px and above) to distinguish them from UI text.
- Maintain a comfortable vertical rhythm with a default element gap of 16px and section gap of 64px.

## Don'ts

- Avoid using highly saturated, vivid colors; the palette is intentionally subtle and achromatic.
- Do not introduce sharp corners or small radii; the system favors soft, rounded edges at 12px for cards and 100px for buttons.
- Do not use heavy, opaque drop shadows; stick to the light, ethereal shadow for elevation.
- Do not use generic system fonts; always specify Messina Sans for UI and body text, and Untitled Serif for display headings.
- Avoid tightly packed content; maintain ample spacing and allow sufficient whitespace around elements.

## Layout

The page uses a maximum width of 1200px, centered on the screen, creating a contained and focused experience. The hero section features a large, centered headline over a subtle gradient background, setting a calm, spacious tone. Content sections generally follow a pattern of generous vertical spacing, with testimonials in a 3-column card grid and feature lists presented as centered blocks. Navigation is a sticky top bar with left-aligned branding and right-aligned links and a sign-up button. The overall density is spacious, ensuring ample breathing room between elements and sections.

## Imagery

The visual language for imagery is minimal and functional, primarily consisting of product showcases and abstract atmospheric elements. Product screenshots of mobile devices are shown with realistic interfaces, rendered on white backgrounds with soft shadows for elevation. Icons are outlined, lightweight, and mono-color, serving as subtle decorative or explanatory elements. Backgrounds feature large, abstract, multi-color conic gradients, providing a soft, almost ethereal atmosphere without disrupting the clean UI. Imagery serves a decorative and illustrative role rather than being critical content.

## Elevation

| Element | Style |
| --- | --- |
| Elevated Feature Card | rgba(0, 0, 0, 0.05) 0px 4px 20px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Monochrome base, subtle shadows for elevation, and a focus on clean, spacious UI with minimal color accents. |
| Framer | Extensive use of whitespace, lightweight typography, and understated component styling. |
| Stripe | Emphasis on simplicity, balanced layouts, and a refined achromatic palette with subtle functional highlights. |
| Revolut | Modern fintech aesthetic with clean lines, functional UI components, and a primary dependence on neutral tones. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #393737
background: #f7f7f7
border: #f7f7f7
accent: #e7f3ee
primary action: no distinct CTA color

Example Component Prompts:
1. Create a Hero Section with a main headline: 'Seamless Connectivity.', Messina Sans 88px, weight 400, color #393737, letter-spacing -2.64px. Below it, a subtle ghost button: 'Learn More', background rgba(247, 247, 247, 0.6), text color #393737, border top rgba(255, 255, 255, 0.6), 100px radius, 13px vertical padding, 18px horizontal padding.
2. Design an Elevated Feature Card: Background #ffffff, border radius 12px, shadow rgba(0, 0, 0, 0.05) 0px 4px 20px 0px, 18px padding. Inside, place a caption 'Global' in Messina Sans 13px, color #393737, followed by a headline 'Unlimited Data' in Untitled Serif 40px, color #393737, letter-spacing -1.0px.
3. Create a Badge Pill: 'Live in Alpha' with background #f7f7f7, text color #393737, border radius 100px, 10px vertical and 14px horizontal padding (internal text padding), Messina Sans 14px.
4. Compose a Footer Navigation Link: 'Privacy Policy', text color #393737, Messina Sans 16px, 10px horizontal padding, 12px vertical padding. No underline by default.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508441102-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508441102-thumb.jpg |
