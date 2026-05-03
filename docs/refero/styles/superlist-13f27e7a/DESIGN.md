# Superlist — Refero Style

- Refero URL: https://styles.refero.design/style/13f27e7a-d84f-4ff9-a030-ae4e2c930757
- Site URL: https://superlist.com
- ID: 13f27e7a-d84f-4ff9-a030-ae4e2c930757
- Theme: dark
- Industry: productivity
- Created: 2026-02-13T13:52:09.000Z
- Ranks: newest: 1192, popular: 380, trending: 827

> Dark Nebula with Neon Traces. A cosmic expanse of deep grays and violet, punctuated by sharp, vivid bursts of color that guide the eye.

## Description

Superlist employs a dark, almost theatrical, aesthetic with intense, contrasting colors to highlight interaction. The deep charcoal and muted violet backgrounds create a sophisticated stage, upon which vibrant pinks and oranges burst forth as calls to action and signifiers of activity. The interplay of strong, condensed headings and softer, spacious body text paired with generous spacing gives the design a comfortable yet decisive presence.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Space | #181824 | neutral | Primary background for pages and major sections, setting a dark, immersive tone. |
| Charcoal Surface | #26253b | neutral | Background for cards, navigation panels, and interactive elements, providing clear differentiation from the main background. |
| Nebula Gray | #696f81 | neutral | Subtle secondary text, inactive states, and borders, providing high contrast against dark surfaces while maintaining a dark theme. |
| Ghostly Grey | #8e8da0 | neutral | Navigation links, body text in less prominent areas, and subtle UI accents, a slightly lighter neutral than Nebula Gray. |
| Snow Drift | #ffffff | neutral | Primary text color for headlines and key information, ensuring maximum readability. |
| Stardust White | #f7f7ff | neutral | Prominent text, active navigation items, and icons, a slightly off-white that feels softer than pure white. |
| Comet Tail Violet | #535676 | accent | Accent color for specific iconography or secondary headings, adding a muted chromatic touch. |
| Rocket Orange | #ff4a36 | brand | Primary call-to-action button, highlighting urgent or primary interactions against the dark background. |
| Flare Orange | #ff3a26 | brand | Hover or active state for Rocket Orange, intensifying the call to action. |
| Galaxy Violet | #9087ff | accent | Decorative highlights, accent text, or specific feature differentiation, adding a vibrant, luminous touch. |
| Cosmic Pink | #f866db | accent | Decorative highlights, accent text, or specific feature differentiation, contributing to the vibrant hero section. |
| Neon Pink | #f739f7 | accent | Decorative highlights, accent text, or specific feature differentiation, contributing to the vibrant hero section. |
| Asteroid Yellow | #fbe74 | accent | Highlight elements or specific feature markers, providing a bright contrast point. |
| Plasma Green | #22c55 | semantic | Success states or positive indicators. |
| Electric Blue | #2590f1 | semantic | Informational highlights or specific link states. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Haffer XH SemiBold | Montserrat | 400, 600 | 16px, 18px, 24px, 30px, 48px, 70px, 88px | 0.95, 1.00, 1.10, 1.20, 1.50 | Used for smaller headings, navigation items, and input text fields, maintaining a structured, condensed feel. |
| Haffer XH SemiBold | Montserrat | 400, 600 | 16px, 18px, 24px, 30px, 48px, 70px, 88px | 0.95, 1.00, 1.10, 1.20, 1.50 | Dominant font for all larger headings and display text. Its semi-bold weight at very large sizes (70px, 88px) with tight letter spacing (-2%) creates a powerful, impactful presence that avoids shouting due to its condensed form factor. |
| Jersey 10 | Oswald | 400 | 70px | 0.90 | Signature display font, often used in combination with Haffer XH SemiBold for hero headlines. Its unusually tight line height and letter spacing give a distinct, almost monospace-like character to large statements. |
| Inter | Inter | 400, 500 | 12px, 14px, 16px, 18px | 1.20, 1.30, 1.40 | Used for most body text, links, and supporting details. Its variable weight and spacing ensure legibility across various text densities, providing a comfortable counterpoint to the condensed headlines. |
| Inter | Inter | 400, 500 | 12px, 14px, 16px, 18px | 1.20, 1.30, 1.40 | Medium weight for Inter, used for emphasizing phrases within body text or for secondary navigation items, adding moderate emphasis. |
| CUSTOM;Blender Medium | Roboto Condensed | 400 | 16px | 1.30 | A distinct custom font blended in for specific body text sections, providing a unique micro-typographic texture compared to Inter. |
| Satoshi | Manrope | 500 | 16px | 1.20 | Another custom font used for specific body text elements, likely for technical labels or UI elements, offering a clean, modern feel. |
| sans-serif | System UI | 400 | 12px | 1.20 | Fallback and default for minor UI elements, ensuring basic legibility across all platforms. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.2 |  |
| body-sm | 14 | 1.3 | -0.168 |
| body | 16 | 1.4 | -0.08 |
| subheading | 18 | 1.2 | -0.216 |
| heading | 24 | 1.1 | -0.48 |
| heading-lg | 30 | 1.1 | -0.6 |
| display | 48 | 1 | -0.96 |
| display-lg | 70 | 0.9 | -1.4 |
| display-xl | 88 | 0.95 | -1.76 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "20px",
    "badges": "8px",
    "inputs": "100px",
    "buttons": "100px"
  },
  "elementGap": "10px",
  "sectionGap": "64px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### CTA Button Group



### Testimonial Cards



### Cookie Consent Banner



### Navigation Link

**Role:** Header navigation items

Text link using 'Ghostly Grey' (#8e8da0), weight 400 (Inter) or 600 (Haffer XH SemiBold) at 16px size. No background; simply a text element. Hover state likely uses 'Stardust White' (#f7f7ff) or 'Snow Drift' (#ffffff).

### Hero Section Headline

**Role:** Prominent page titles

Large text using a combination of 'Haffer XH SemiBold' weight 600 at 88px and 'Jersey 10' weight 400 at 70px. Text color is 'Snow Drift' (#ffffff), with character spacing of -0.02em (-1.4px at 70px, -1.76px at 88px) and a tight line height of 0.90 for Jersey 10 and 0.95 for Haffer XH SemiBold, creating a dense, impactful textual block.

### Feature Card

**Role:** Content container for features or testimonials

Rectangular card with 'Deep Space' (#181824) background, contrasted from the main page background. Features a generous corner radius of `20px` and likely internal padding of 16px to 24px (inferred from spacing tokens). Testimonial cards are on 'Charcoal Surface' (#26253b) and feature text color 'Snow Drift' (#ffffff).

## Do's

- Use 'Rocket Orange' (#ff4a36) exclusively for primary calls to action, such as 'Sign up for free' buttons, maintaining its high impact across the site.
- Apply `20px` border-radius to all significant content cards and feature blocks, and `100px` for interactive elements like buttons and input fields, to balance visual softness with system precision.
- Employ the 'Deep Space' (#181824) for page backgrounds and 'Charcoal Surface' (#26253b) for elevated content containers to establish a clear visual hierarchy in the dark theme.
- Pair 'Haffer XH SemiBold' (600 weight) with 'Jersey 10' (400 weight) for large headlines, maintaining a -0.02em letter spacing for a signature condensed and bold statement.
- Utilize Inter font family for all body text in weights 400 and 500, with varying line heights (1.2-1.4) and subtle negative letter spacing (-0.02em, -0.012em, -0.005em) to ensure legibility and a refined feel.
- Maintain a comfortable '10px' as the default element spacing, scaling up to '64px' for section gaps, providing ample breathing room between content blocks.

## Don'ts

- Do not introduce new primary accent colors; restrict all vibrant highlights to the established 'Rocket Orange', 'Galaxy Violet', 'Cosmic Pink', 'Neon Pink', and 'Asteroid Yellow' palette.
- Avoid using multiple different font families for body text; stick to Inter, Blender Medium, and Satoshi as designated to prevent visual inconsistency.
- Do not deviate from the established border radii (`20px` for cards, `100px` for buttons/inputs); arbitrary rounding will disrupt the visual consistency.
- Do not use subtle, low-contrast shadows; only apply the `rgba(0, 0, 0, 0.08) 0px 10px 15px 0px` for clear elevation on dark backgrounds, or the `rgba(0,0,0,.1) 0 1px 1px 0, rgba(0,0,0,.05) 0 2px 4px 0, rgba(255,255,255,.45) 0 .5px 0 0 inset` for more complex UI components.
- Never use line heights greater than 1.5 for any text, especially headlines, to maintain the site's condensed and impactful typographic style.
- Do not use pure black (#000000) for text on a dark background; always prioritize the high-contrast 'Snow Drift' (#ffffff) or 'Stardust White' (#f7f7ff) for readability.
- Avoid full-width content; ensure main content areas are logically contained, implicitly aligning to a grid or maximum width, even if no explicit max-width is declared.

## Layout

The site uses a full-bleed layout for background elements, but content is generally contained within an implicit maximum width, giving a spacious feel without feeling confined. The hero section is full-viewport, featuring a large, centered headline over a dynamic, dark gradient background. Sections alternate between a dark 'Deep Space' (#181824) background and potentially a slightly lighter variant for feature blocks. Content is often presented in a single, centered stack, or in two-column layouts with text on one side and a product image or screenshot on the other, creating a clear visual flow. Testimonials are arranged in a dynamic, potentially uneven grid of cards. The navigation is a fixed top bar on a dark background, with prominent 'Sign In' and 'Sign up for free' actions.

## Imagery

This site features a blend of product screenshots, abstract gradient backgrounds, and minimal iconography. Product screenshots are typically shown within dark, rounded UI containers, often overlaid on gradient backdrops, emphasizing the application's functionality in context. The abstract graphics are vibrant, evolving gradients (like those in the hero section) that provide a dynamic, futuristic feel without being distracting. Icons are monochrome, often using 'Stardust White' (#f7f7ff) or 'Ghostly Grey' (#8e8da0) on dark surfaces, maintaining a consistent, clean pictogram style. Imagery serves to showcase the product directly or provide decorative atmosphere, sparingly used to balance visual interest with UI focus. Density is moderate, with images playing a primary role in hero sections and feature displays, but giving way to text-dominant layouts in deeper content.

## Elevation

| Element | Style |
| --- | --- |
| Testimonial Card | rgba(0, 0, 0, 0.08) 0px 10px 15px 0px |
| Navigation Bar | rgba(0, 0, 0, 0.1) 0px 1px 1px 0px, rgba(0, 0, 0, 0.05) 0px 2px 4px 0px, rgba(255, 255, 255, 0.45) 0px 0.5px 0px 0px inset |

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Dark UI with vibrant accent colors (Linear's purple vs Superlist's orange/pink), focus on condensed typography, and generous spacing to highlight content. |
| Raycast | Dark mode interface with prominent product screenshots, emphasis on productivity tools, and a combination of structured and rounded UI elements. |
| Notion | Focus on an 'all-in-one workspace' proposition, clean typography for content, and a preference for functional over decorative imagery. |
| Todoist | Emphasis on task management and productivity with a clean, functional UI, although Todoist typically uses lighter themes, the emphasis on direct function is similar. |
| Craft.do | Strong emphasis on visual design and typography in a productivity app context, often mixing different font styles for impact. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (Primary): #ffffff
- Background (Primary): #181824
- CTA Button: #ff4a36
- Card Background: #26253b
- Neutral Text: #696f81
- Accent Highlight: #f866db

### 3-5 Example Component Prompts
1. Create a Hero Section: Background is a full-bleed dark gradient. Centered Headline 'Tasks, notes, and plans.' uses 'Haffer XH SemiBold' weight 600 at 88px, #ffffff, letter-spacing -1.76px. Subheadline 'Finally in one app.' uses 'Jersey 10' weight 400 at 70px, #ffffff, letter-spacing -1.4px. Body text below uses Inter weight 400 at 18px, #696f81, line-height 1.4, letter-spacing -0.012em. A 'Sign up for free' button is centered below, with #ff4a36 background, #ffffff text, 100px border-radius, padding 10px-20px (inferred to match visual style).
2. Design a Testimonial Card: Background is 'Charcoal Surface' #26253b, with a 20px border-radius. Text uses Inter weight 400 at 16px, line-height 1.4, #ffffff color. Apply shadow `rgba(0, 0, 0, 0.08) 0px 10px 15px 0px` for elevation.
3. Create a Navigation Bar: Background 'Deep Space' #181824. Links use 'Ghostly Grey' #8e8da0, Haffer XH SemiBold weight 400 at 16px. Active links use 'Stardust White' #f7f7ff. Include a 'Sign up for free' button (using 'Rocket Orange' #ff4a36 background, 'Snow Drift' #ffffff text, 100px radius, 10px-20px padding) and a 'Sign In' text link ('Snow Drift' #ffffff). The bar should have a subtle shadow: `rgba(0, 0, 0, 0.1) 0px 1px 1px 0px, rgba(0, 0, 0, 0.05) 0px 2px 4px 0px, rgba(255, 255, 255, 0.45) 0px 0.5px 0px 0px inset`.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932215877-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775932215877-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/13f27e7a-d84f-4ff9-a030-ae4e2c930757-1777561822046-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/13f27e7a-d84f-4ff9-a030-ae4e2c930757-1777561822046-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/13f27e7a-d84f-4ff9-a030-ae4e2c930757-1777561822046-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/13f27e7a-d84f-4ff9-a030-ae4e2c930757-1777561822046-preview-detail-poster.jpg |
